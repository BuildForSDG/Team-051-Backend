<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePoliceStationNotificationAPIRequest;
use App\Http\Requests\API\UpdatePoliceStationNotificationAPIRequest;
use App\Models\PoliceStationNotification;
use App\Repositories\PoliceStationNotificationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PoliceStationNotificationController
 * @package App\Http\Controllers\API
 */

class PoliceStationNotificationAPIController extends AppBaseController
{
    /** @var  PoliceStationNotificationRepository */
    private $notificationRepo;

    public function __construct(PoliceStationNotificationRepository $notificationRepo)
    {
        $this->notificationRepo = $notificationRepo;
    }

    /**
     * Display a listing of the PoliceStationNotification.
     * GET|HEAD /policeStationNotifications
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $notifications = $this->notificationRepo->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($notifications->toArray(), 'Police Station Notifications retrieved successfully');
    }

    /**
     * Store a newly created PoliceStationNotification in storage.
     * POST /policeStationNotifications
     *
     * @param CreatePoliceStationNotificationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePoliceStationNotificationAPIRequest $request)
    {
        $input = $request->all();

        $notification = $this->notificationRepo->create($input);

        return $this->sendResponse($notification->toArray(), 'Police Station Notification saved successfully');
    }

    /**
     * Display the specified PoliceStationNotification.
     * GET|HEAD /policeStationNotifications/{id}
     *
     * @param int $notification_id
     *
     * @return Response
     */
    public function show($notification_id)
    {
        /** @var PoliceStationNotification $notification */
        $notification = $this->notificationRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('Police Station Notification not found');
        }

        return $this->sendResponse($notification->toArray(), 'Police Station Notification retrieved successfully');
    }

    /**
     * Update the specified PoliceStationNotification in storage.
     * PUT/PATCH /policeStationNotifications/{id}
     *
     * @param int $notification_id
     * @param UpdatePoliceStationNotificationAPIRequest $request
     *
     * @return Response
     */
    public function update($notification_id, UpdatePoliceStationNotificationAPIRequest $request)
    {
        $input = $request->all();

        /** @var PoliceStationNotification $notification */
        $notification = $this->notificationRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('Police Station Notification not found');
        }

        $notification = $this->notificationRepo->update($input, $notification_id);

        return $this->sendResponse($notification->toArray(), 'PoliceStationNotification updated successfully');
    }

    /**
     * Remove the specified PoliceStationNotification from storage.
     * DELETE /policeStationNotifications/{id}
     *
     * @param int $notification_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($notification_id)
    {
        /** @var PoliceStationNotification $notification */
        $notification = $this->notificationRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('Police Station Notification not found');
        }

        $notification->delete();

        return $this->sendSuccess('Police Station Notification deleted successfully');
    }
}
