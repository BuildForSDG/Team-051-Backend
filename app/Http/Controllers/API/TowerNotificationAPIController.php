<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTowerNotificationAPIRequest;
use App\Http\Requests\API\UpdateTowerNotificationAPIRequest;
use App\Models\TowerNotification;
use App\Repositories\TowerNotificationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TowerNotificationController
 * @package App\Http\Controllers\API
 */

class TowerNotificationAPIController extends AppBaseController
{
    /** @var  TowerNotificationRepository */
    private $towerRepo;

    public function __construct(TowerNotificationRepository $towerRepo)
    {
        $this->towerRepo = $towerRepo;
    }

    /**
     * Display a listing of the TowerNotification.
     * GET|HEAD /towerNotifications
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $notifications = $this->towerRepo->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($notifications->toArray(), 'Tower Notifications retrieved successfully');
    }

    /**
     * Store a newly created TowerNotification in storage.
     * POST /towerNotifications
     *
     * @param CreateTowerNotificationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTowerNotificationAPIRequest $request)
    {
        $input = $request->all();

        $notification = $this->towerRepo->create($input);

        return $this->sendResponse($notification->toArray(), 'Tower Notification saved successfully');
    }

    /**
     * Display the specified TowerNotification.
     * GET|HEAD /towerNotifications/{id}
     *
     * @param int $notification_id
     *
     * @return Response
     */
    public function show($notification_id)
    {
        /** @var TowerNotification $notification */
        $notification = $this->towerRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('Tower Notification not found');
        }

        return $this->sendResponse($notification->toArray(), 'Tower Notification retrieved successfully');
    }

    /**
     * Update the specified TowerNotification in storage.
     * PUT/PATCH /towerNotifications/{id}
     *
     * @param int $notification_id
     * @param UpdateTowerNotificationAPIRequest $request
     *
     * @return Response
     */
    public function update($notification_id, UpdateTowerNotificationAPIRequest $request)
    {
        $input = $request->all();

        /** @var TowerNotification $notification */
        $notification = $this->towerRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('Tower Notification not found');
        }

        $notification = $this->towerRepo->update($input, $notification_id);

        return $this->sendResponse($notification->toArray(), 'TowerNotification updated successfully');
    }

    /**
     * Remove the specified TowerNotification from storage.
     * DELETE /towerNotifications/{id}
     *
     * @param int $notification_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($notification_id)
    {
        /** @var TowerNotification $notification */
        $notification = $this->towerRepo->find($notification_id);

        if (empty($notification)) {
            return $this->sendError('Tower Notification not found');
        }

        $notification->delete();

        return $this->sendSuccess('Tower Notification deleted successfully');
    }
}
