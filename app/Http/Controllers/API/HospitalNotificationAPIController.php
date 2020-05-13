<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateHospitalNotificationAPIRequest;
use App\Http\Requests\API\UpdateHospitalNotificationAPIRequest;
use App\Models\HospitalNotification;
use App\Repositories\HospitalNotificationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class HospitalNotificationController
 * @package App\Http\Controllers\API
 */

class HospitalNotificationAPIController extends AppBaseController
{
    /** @var  HospitalNotificationRepository */
    private $hospitalNotificationRepository;

    public function __construct(HospitalNotificationRepository $hospitalNotificationRepo)
    {
        $this->hospitalNotificationRepository = $hospitalNotificationRepo;
    }

    /**
     * Display a listing of the HospitalNotification.
     * GET|HEAD /hospitalNotifications
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $hospitalNotifications = $this->hospitalNotificationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($hospitalNotifications->toArray(), 'Hospital Notifications retrieved successfully');
    }

    /**
     * Store a newly created HospitalNotification in storage.
     * POST /hospitalNotifications
     *
     * @param CreateHospitalNotificationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateHospitalNotificationAPIRequest $request)
    {
        $input = $request->all();

        $hospitalNotification = $this->hospitalNotificationRepository->create($input);

        return $this->sendResponse($hospitalNotification->toArray(), 'Hospital Notification saved successfully');
    }

    /**
     * Display the specified HospitalNotification.
     * GET|HEAD /hospitalNotifications/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var HospitalNotification $hospitalNotification */
        $hospitalNotification = $this->hospitalNotificationRepository->find($id);

        if (empty($hospitalNotification)) {
            return $this->sendError('Hospital Notification not found');
        }

        return $this->sendResponse($hospitalNotification->toArray(), 'Hospital Notification retrieved successfully');
    }

    /**
     * Update the specified HospitalNotification in storage.
     * PUT/PATCH /hospitalNotifications/{id}
     *
     * @param int $id
     * @param UpdateHospitalNotificationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHospitalNotificationAPIRequest $request)
    {
        $input = $request->all();

        /** @var HospitalNotification $hospitalNotification */
        $hospitalNotification = $this->hospitalNotificationRepository->find($id);

        if (empty($hospitalNotification)) {
            return $this->sendError('Hospital Notification not found');
        }

        $hospitalNotification = $this->hospitalNotificationRepository->update($input, $id);

        return $this->sendResponse($hospitalNotification->toArray(), 'HospitalNotification updated successfully');
    }

    /**
     * Remove the specified HospitalNotification from storage.
     * DELETE /hospitalNotifications/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var HospitalNotification $hospitalNotification */
        $hospitalNotification = $this->hospitalNotificationRepository->find($id);

        if (empty($hospitalNotification)) {
            return $this->sendError('Hospital Notification not found');
        }

        $hospitalNotification->delete();

        return $this->sendSuccess('Hospital Notification deleted successfully');
    }
}
