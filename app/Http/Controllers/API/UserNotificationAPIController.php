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
    private $notificationRepo;

    public function __construct(UserNotificationRepository $notificationRepo)
    {
        $this->notificationRepo = $notificationRepo;
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
        $notifications = $this->notificationRepo->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($notifications->toArray(), 'User Notifications retrieved successfully');
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

        $notification = $this->notificationRepo->create($input);

        return $this->sendResponse($notification->toArray(), 'User Notification saved successfully');
    }

    /**
     * Display the specified UserNotification.
     * GET|HEAD /userNotifications/{id}
     *
     * @param int $notification_id
     *
     * @return Response
     */
    public function show($notification_id)
    {
        /** @var UserNotification $notification */
        $notification = $this->notificationRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('User Notification not found');
        }

        return $this->sendResponse($notification->toArray(), 'User Notification retrieved successfully');
    }

    /**
     * Update the specified UserNotification in storage.
     * PUT/PATCH /userNotifications/{id}
     *
     * @param int $notification_id
     * @param UpdateUserNotificationAPIRequest $request
     *
     * @return Response
     */
    public function update($notification_id, UpdateUserNotificationAPIRequest $request)
    {
        $input = $request->all();

        /** @var UserNotification $notification */
        $notification = $this->notificationRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('User Notification not found');
        }

        $notification = $this->notificationRepo->update($input, $notification_id);

        return $this->sendResponse($notification->toArray(), 'UserNotification updated successfully');
    }

    /**
     * Remove the specified UserNotification from storage.
     * DELETE /userNotifications/{id}
     *
     * @param int $notification_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($notification_id)
    {
        /** @var UserNotification $notification */
        $notification = $this->notificationRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('User Notification not found');
        }

        $notification->delete();

        return $this->sendSuccess('User Notification deleted successfully');
    }
}
