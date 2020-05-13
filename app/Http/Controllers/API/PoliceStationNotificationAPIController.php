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
    private $policeStationNotificationRepository;

    public function __construct(PoliceStationNotificationRepository $policeStationNotificationRepo)
    {
        $this->policeStationNotificationRepository = $policeStationNotificationRepo;
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
        $policeStationNotifications = $this->policeStationNotificationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($policeStationNotifications->toArray(), 'Police Station Notifications retrieved successfully');
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

        $policeStationNotification = $this->policeStationNotificationRepository->create($input);

        return $this->sendResponse($policeStationNotification->toArray(), 'Police Station Notification saved successfully');
    }

    /**
     * Display the specified PoliceStationNotification.
     * GET|HEAD /policeStationNotifications/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PoliceStationNotification $policeStationNotification */
        $policeStationNotification = $this->policeStationNotificationRepository->find($id);

        if (empty($policeStationNotification)) {
            return $this->sendError('Police Station Notification not found');
        }

        return $this->sendResponse($policeStationNotification->toArray(), 'Police Station Notification retrieved successfully');
    }

    /**
     * Update the specified PoliceStationNotification in storage.
     * PUT/PATCH /policeStationNotifications/{id}
     *
     * @param int $id
     * @param UpdatePoliceStationNotificationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePoliceStationNotificationAPIRequest $request)
    {
        $input = $request->all();

        /** @var PoliceStationNotification $policeStationNotification */
        $policeStationNotification = $this->policeStationNotificationRepository->find($id);

        if (empty($policeStationNotification)) {
            return $this->sendError('Police Station Notification not found');
        }

        $policeStationNotification = $this->policeStationNotificationRepository->update($input, $id);

        return $this->sendResponse($policeStationNotification->toArray(), 'PoliceStationNotification updated successfully');
    }

    /**
     * Remove the specified PoliceStationNotification from storage.
     * DELETE /policeStationNotifications/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PoliceStationNotification $policeStationNotification */
        $policeStationNotification = $this->policeStationNotificationRepository->find($id);

        if (empty($policeStationNotification)) {
            return $this->sendError('Police Station Notification not found');
        }

        $policeStationNotification->delete();

        return $this->sendSuccess('Police Station Notification deleted successfully');
    }
}
