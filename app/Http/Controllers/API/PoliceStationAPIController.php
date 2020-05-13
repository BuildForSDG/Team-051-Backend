<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePoliceStationAPIRequest;
use App\Http\Requests\API\UpdatePoliceStationAPIRequest;
use App\Models\PoliceStation;
use App\Repositories\PoliceStationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PoliceStationController
 * @package App\Http\Controllers\API
 */

class PoliceStationAPIController extends AppBaseController
{
    /** @var  PoliceStationRepository */
    private $policeStationRepository;

    public function __construct(PoliceStationRepository $policeStationRepo)
    {
        $this->policeStationRepository = $policeStationRepo;
    }

    /**
     * Display a listing of the PoliceStation.
     * GET|HEAD /policeStations
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $policeStations = $this->policeStationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($policeStations->toArray(), 'Police Stations retrieved successfully');
    }

    /**
     * Store a newly created PoliceStation in storage.
     * POST /policeStations
     *
     * @param CreatePoliceStationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePoliceStationAPIRequest $request)
    {
        $input = $request->all();

        $policeStation = $this->policeStationRepository->create($input);

        return $this->sendResponse($policeStation->toArray(), 'Police Station saved successfully');
    }

    /**
     * Display the specified PoliceStation.
     * GET|HEAD /policeStations/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PoliceStation $policeStation */
        $policeStation = $this->policeStationRepository->find($id);

        if (empty($policeStation)) {
            return $this->sendError('Police Station not found');
        }

        return $this->sendResponse($policeStation->toArray(), 'Police Station retrieved successfully');
    }

    /**
     * Update the specified PoliceStation in storage.
     * PUT/PATCH /policeStations/{id}
     *
     * @param int $id
     * @param UpdatePoliceStationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePoliceStationAPIRequest $request)
    {
        $input = $request->all();

        /** @var PoliceStation $policeStation */
        $policeStation = $this->policeStationRepository->find($id);

        if (empty($policeStation)) {
            return $this->sendError('Police Station not found');
        }

        $policeStation = $this->policeStationRepository->update($input, $id);

        return $this->sendResponse($policeStation->toArray(), 'PoliceStation updated successfully');
    }

    /**
     * Remove the specified PoliceStation from storage.
     * DELETE /policeStations/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PoliceStation $policeStation */
        $policeStation = $this->policeStationRepository->find($id);

        if (empty($policeStation)) {
            return $this->sendError('Police Station not found');
        }

        $policeStation->delete();

        return $this->sendSuccess('Police Station deleted successfully');
    }
}
