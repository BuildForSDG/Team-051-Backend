<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateUserSettingAPIRequest;
use App\Http\Requests\API\UpdateUserSettingAPIRequest;
use App\Models\UserSetting;
use App\Repositories\UserSettingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class UserSettingController
 * @package App\Http\Controllers\API
 */

class UserSettingAPIController extends AppBaseController
{
    /** @var  UserSettingRepository */
    private $settingRepo;

    public function __construct(UserSettingRepository $settingRepo)
    {
        $this->settingRepo = $settingRepo;
    }

    /**
     * Display a listing of the UserSetting.
     * GET|HEAD /userSettings
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $userSettings = $this->settingRepo->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($userSettings->toArray(), 'User Settings retrieved successfully');
    }

    /**
     * Store a newly created UserSetting in storage.
     * POST /userSettings
     *
     * @param CreateUserSettingAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateUserSettingAPIRequest $request)
    {
        $input = $request->all();

        $userSetting = $this->settingRepo->create($input);

        return $this->sendResponse($userSetting->toArray(), 'User Setting saved successfully');
    }

    /**
     * Display the specified UserSetting.
     * GET|HEAD /userSettings/{id}
     *
     * @param int $setting_id
     *
     * @return Response
     */
    public function show($setting_id)
    {
        /** @var UserSetting $userSetting */
        $userSetting = $this->settingRepo->find($setting_id);

        if (empty($userSetting)) {
            return $this->sendError('User Setting not found');
        }

        return $this->sendResponse($userSetting->toArray(), 'User Setting retrieved successfully');
    }

    /**
     * Update the specified UserSetting in storage.
     * PUT/PATCH /userSettings/{id}
     *
     * @param int $setting_id
     * @param UpdateUserSettingAPIRequest $request
     *
     * @return Response
     */
    public function update($setting_id, UpdateUserSettingAPIRequest $request)
    {
        $input = $request->all();

        /** @var UserSetting $userSetting */
        $userSetting = $this->settingRepo->find($setting_id);

        if (empty($userSetting)) {
            return $this->sendError('User Setting not found');
        }

        $userSetting = $this->settingRepo->update($input, $setting_id);

        return $this->sendResponse($userSetting->toArray(), 'UserSetting updated successfully');
    }

    /**
     * Remove the specified UserSetting from storage.
     * DELETE /userSettings/{id}
     *
     * @param int $setting_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($setting_id)
    {
        /** @var UserSetting $userSetting */
        $userSetting = $this->settingRepo->find($setting_id);

        if (empty($userSetting)) {
            return $this->sendError('User Setting not found');
        }

        $userSetting->delete();

        return $this->sendSuccess('User Setting deleted successfully');
    }
}
