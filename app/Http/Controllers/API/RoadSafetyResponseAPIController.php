<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRoadSafetyResponseAPIRequest;
use App\Http\Requests\API\UpdateRoadSafetyResponseAPIRequest;
use App\Models\RoadSafetyResponse;
use App\Repositories\RoadSafetyResponseRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class RoadSafetyResponseController
 * @package App\Http\Controllers\API
 */

class RoadSafetyResponseAPIController extends AppBaseController
{
    /** @var  RoadSafetyResponseRepository */
    private $roadSafetyResponseRepository;

    public function __construct(RoadSafetyResponseRepository $roadSafetyResponseRepo)
    {
        $this->roadSafetyResponseRepository = $roadSafetyResponseRepo;
    }

    /**
     * Display a listing of the RoadSafetyResponse.
     * GET|HEAD /roadSafetyResponses
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $roadSafetyResponses = $this->roadSafetyResponseRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($roadSafetyResponses->toArray(), 'Road Safety Responses retrieved successfully');
    }

    /**
     * Store a newly created RoadSafetyResponse in storage.
     * POST /roadSafetyResponses
     *
     * @param CreateRoadSafetyResponseAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRoadSafetyResponseAPIRequest $request)
    {
        $input = $request->all();

        $roadSafetyResponse = $this->roadSafetyResponseRepository->create($input);

        return $this->sendResponse($roadSafetyResponse->toArray(), 'Road Safety Response saved successfully');
    }

    /**
     * Display the specified RoadSafetyResponse.
     * GET|HEAD /roadSafetyResponses/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var RoadSafetyResponse $roadSafetyResponse */
        $roadSafetyResponse = $this->roadSafetyResponseRepository->find($id);

        if (empty($roadSafetyResponse)) {
            return $this->sendError('Road Safety Response not found');
        }

        return $this->sendResponse($roadSafetyResponse->toArray(), 'Road Safety Response retrieved successfully');
    }

    /**
     * Update the specified RoadSafetyResponse in storage.
     * PUT/PATCH /roadSafetyResponses/{id}
     *
     * @param int $id
     * @param UpdateRoadSafetyResponseAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoadSafetyResponseAPIRequest $request)
    {
        $input = $request->all();

        /** @var RoadSafetyResponse $roadSafetyResponse */
        $roadSafetyResponse = $this->roadSafetyResponseRepository->find($id);

        if (empty($roadSafetyResponse)) {
            return $this->sendError('Road Safety Response not found');
        }

        $roadSafetyResponse = $this->roadSafetyResponseRepository->update($input, $id);

        return $this->sendResponse($roadSafetyResponse->toArray(), 'RoadSafetyResponse updated successfully');
    }

    /**
     * Remove the specified RoadSafetyResponse from storage.
     * DELETE /roadSafetyResponses/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var RoadSafetyResponse $roadSafetyResponse */
        $roadSafetyResponse = $this->roadSafetyResponseRepository->find($id);

        if (empty($roadSafetyResponse)) {
            return $this->sendError('Road Safety Response not found');
        }

        $roadSafetyResponse->delete();

        return $this->sendSuccess('Road Safety Response deleted successfully');
    }
}
