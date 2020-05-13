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
    private $towerNotificationRepository;

    public function __construct(TowerNotificationRepository $towerNotificationRepo)
    {
        $this->towerNotificationRepository = $towerNotificationRepo;
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
        $towerNotifications = $this->towerNotificationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($towerNotifications->toArray(), 'Tower Notifications retrieved successfully');
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

        $towerNotification = $this->towerNotificationRepository->create($input);

        return $this->sendResponse($towerNotification->toArray(), 'Tower Notification saved successfully');
    }

    /**
     * Display the specified TowerNotification.
     * GET|HEAD /towerNotifications/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TowerNotification $towerNotification */
        $towerNotification = $this->towerNotificationRepository->find($id);

        if (empty($towerNotification)) {
            return $this->sendError('Tower Notification not found');
        }

        return $this->sendResponse($towerNotification->toArray(), 'Tower Notification retrieved successfully');
    }

    /**
     * Update the specified TowerNotification in storage.
     * PUT/PATCH /towerNotifications/{id}
     *
     * @param int $id
     * @param UpdateTowerNotificationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTowerNotificationAPIRequest $request)
    {
        $input = $request->all();

        /** @var TowerNotification $towerNotification */
        $towerNotification = $this->towerNotificationRepository->find($id);

        if (empty($towerNotification)) {
            return $this->sendError('Tower Notification not found');
        }

        $towerNotification = $this->towerNotificationRepository->update($input, $id);

        return $this->sendResponse($towerNotification->toArray(), 'TowerNotification updated successfully');
    }

    /**
     * Remove the specified TowerNotification from storage.
     * DELETE /towerNotifications/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TowerNotification $towerNotification */
        $towerNotification = $this->towerNotificationRepository->find($id);

        if (empty($towerNotification)) {
            return $this->sendError('Tower Notification not found');
        }

        $towerNotification->delete();

        return $this->sendSuccess('Tower Notification deleted successfully');
    }
}
