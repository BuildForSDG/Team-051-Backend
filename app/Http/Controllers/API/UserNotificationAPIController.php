<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateUserNotificationAPIRequest;
use App\Http\Requests\API\UpdateUserNotificationAPIRequest;
use App\Models\UserNotification;
use App\Repositories\UserNotificationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class UserNotificationController
 * @package App\Http\Controllers\API
 */

class UserNotificationAPIController extends AppBaseController
{
    /** @var  UserNotificationRepository */
    private $userNotificationRepository;

    public function __construct(UserNotificationRepository $userNotificationRepo)
    {
        $this->userNotificationRepository = $userNotificationRepo;
    }

    /**
     * Display a listing of the UserNotification.
     * GET|HEAD /userNotifications
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $userNotifications = $this->userNotificationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($userNotifications->toArray(), 'User Notifications retrieved successfully');
    }

    /**
     * Store a newly created UserNotification in storage.
     * POST /userNotifications
     *
     * @param CreateUserNotificationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateUserNotificationAPIRequest $request)
    {
        $input = $request->all();

        $userNotification = $this->userNotificationRepository->create($input);

        return $this->sendResponse($userNotification->toArray(), 'User Notification saved successfully');
    }

    /**
     * Display the specified UserNotification.
     * GET|HEAD /userNotifications/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var UserNotification $userNotification */
        $userNotification = $this->userNotificationRepository->find($id);

        if (empty($userNotification)) {
            return $this->sendError('User Notification not found');
        }

        return $this->sendResponse($userNotification->toArray(), 'User Notification retrieved successfully');
    }

    /**
     * Update the specified UserNotification in storage.
     * PUT/PATCH /userNotifications/{id}
     *
     * @param int $id
     * @param UpdateUserNotificationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserNotificationAPIRequest $request)
    {
        $input = $request->all();

        /** @var UserNotification $userNotification */
        $userNotification = $this->userNotificationRepository->find($id);

        if (empty($userNotification)) {
            return $this->sendError('User Notification not found');
        }

        $userNotification = $this->userNotificationRepository->update($input, $id);

        return $this->sendResponse($userNotification->toArray(), 'UserNotification updated successfully');
    }

    /**
     * Remove the specified UserNotification from storage.
     * DELETE /userNotifications/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var UserNotification $userNotification */
        $userNotification = $this->userNotificationRepository->find($id);

        if (empty($userNotification)) {
            return $this->sendError('User Notification not found');
        }

        $userNotification->delete();

        return $this->sendSuccess('User Notification deleted successfully');
    }
}
