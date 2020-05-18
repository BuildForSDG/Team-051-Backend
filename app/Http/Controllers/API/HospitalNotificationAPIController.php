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
    /** @var  HospitalRepo */
    private $hospitalRepo;

    public function __construct(HospitalNotificationRepository $hospitalRepo)
    {
        $this->hospitalRepo = $hospitalRepo;
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
        $notifications = $this->hospitalRepo->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($notifications->toArray(), 'Hospital Notifications retrieved successfully');
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

        $notification = $this->hospitalRepo->create($input);

        return $this->sendResponse($notification->toArray(), 'Hospital Notification saved successfully');
    }

    /**
     * Display the specified HospitalNotification.
     * GET|HEAD /hospitalNotifications/{id}
     *
     * @param int $notification_id
     *
     * @return Response
     */
    public function show($notification_id)
    {
        /** @var HospitalNotification $notification */
        $notification = $this->hospitalRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('Hospital Notification not found');
        }

        return $this->sendResponse($notification->toArray(), 'Hospital Notification retrieved successfully');
    }

    /**
     * Update the specified HospitalNotification in storage.
     * PUT/PATCH /hospitalNotifications/{id}
     *
     * @param int $notification_id
     * @param UpdateHospitalNotificationAPIRequest $request
     *
     * @return Response
     */
    public function update($notification_id, UpdateHospitalNotificationAPIRequest $request)
    {
        $input = $request->all();

        /** @var HospitalNotification $notification */
        $notification = $this->hospitalRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('Hospital Notification not found');
        }

        $notification = $this->hospitalRepo->update($input, $notification_id);

        return $this->sendResponse($notification->toArray(), 'HospitalNotification updated successfully');
    }

    /**
     * Remove the specified HospitalNotification from storage.
     * DELETE /hospitalNotifications/{id}
     *
     * @param int $notification_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($notification_id)
    {
        /** @var HospitalNotification $notification */
        $notification = $this->hospitalRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('Hospital Notification not found');
        }

        $notification->delete();

        return $this->sendSuccess('Hospital Notification deleted successfully');
    }
}
