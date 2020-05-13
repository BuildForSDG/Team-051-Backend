<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTripAPIRequest;
use App\Http\Requests\API\UpdateTripAPIRequest;
use App\Models\Trip;
use App\Repositories\TripRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TripController
 * @package App\Http\Controllers\API
 */

class TripAPIController extends AppBaseController
{
    /** @var  TripRepository */
    private $tripRepository;

    public function __construct(TripRepository $tripRepo)
    {
        $this->tripRepository = $tripRepo;
    }

    /**
     * Display a listing of the Trip.
     * GET|HEAD /trips
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $trips = $this->tripRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($trips->toArray(), 'Trips retrieved successfully');
    }

    /**
     * Store a newly created Trip in storage.
     * POST /trips
     *
     * @param CreateTripAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTripAPIRequest $request)
    {
        $input = $request->all();

        $trip = $this->tripRepository->create($input);

        return $this->sendResponse($trip->toArray(), 'Trip saved successfully');
    }

    /**
     * Display the specified Trip.
     * GET|HEAD /trips/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Trip $trip */
        $trip = $this->tripRepository->find($id);

        if (empty($trip)) {
            return $this->sendError('Trip not found');
        }

        return $this->sendResponse($trip->toArray(), 'Trip retrieved successfully');
    }

    /**
     * Update the specified Trip in storage.
     * PUT/PATCH /trips/{id}
     *
     * @param int $id
     * @param UpdateTripAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTripAPIRequest $request)
    {
        $input = $request->all();

        /** @var Trip $trip */
        $trip = $this->tripRepository->find($id);

        if (empty($trip)) {
            return $this->sendError('Trip not found');
        }

        $trip = $this->tripRepository->update($input, $id);

        return $this->sendResponse($trip->toArray(), 'Trip updated successfully');
    }

    /**
     * Remove the specified Trip from storage.
     * DELETE /trips/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Trip $trip */
        $trip = $this->tripRepository->find($id);

        if (empty($trip)) {
            return $this->sendError('Trip not found');
        }

        $trip->delete();

        return $this->sendSuccess('Trip deleted successfully');
    }
}
