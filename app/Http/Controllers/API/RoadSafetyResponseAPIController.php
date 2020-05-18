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
    /** @var  ResponseRepo */
    private $responseRepo;

    public function __construct(RoadSafetyResponseRepository $responseRepo)
    {
        $this->responseRepo = $responseRepo;
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
        $responses = $this->responseRepo->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($responses->toArray(), 'Road Safety Responses retrieved successfully');
    }

    /**
     * Store a newly created Response in storage.
     * POST /roadSafetyResponses
     *
     * @param CreateRoadSafetyResponseAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRoadSafetyResponseAPIRequest $request)
    {
        $input = $request->all();

        $response = $this->responseRepo->create($input);

        return $this->sendResponse($response->toArray(), 'Road Safety Response saved successfully');
    }

    /**
     * Display the specified RoadSafetyResponse.
     * GET|HEAD /roadSafetyResponses/{id}
     *
     * @param int $safety_id
     *
     * @return Response
     */
    public function show($safety_id)
    {
        /** @var RoadSafetyResponse $response */
        $response = $this->responseRepo->find($safety_id);

        if (empty($response)) {
            return $this->sendError('Road Safety Response not found');
        }

        return $this->sendResponse($response->toArray(), 'Road Safety Response retrieved successfully');
    }

    /**
     * Update the specified RoadSafetyResponse in storage.
     * PUT/PATCH /roadSafetyResponses/{id}
     *
     * @param int $safety_id
     * @param UpdateRoadSafetyResponseAPIRequest $request
     *
     * @return Response
     */
    public function update($safety_id, UpdateRoadSafetyResponseAPIRequest $request)
    {
        $input = $request->all();

        /** @var RoadSafetyResponse $response */
        $response = $this->responseRepo->find($safety_id);

        if (empty($response)) {
            return $this->sendError('Road Safety Response not found');
        }

        $response = $this->responseRepo->update($input, $safety_id);

        return $this->sendResponse($response->toArray(), 'RoadSafetyResponse updated successfully');
    }

    /**
     * Remove the specified RoadSafetyResponse from storage.
     * DELETE /roadSafetyResponses/{id}
     *
     * @param int $safety_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($safety_id)
    {
        /** @var RoadSafetyResponse $response */
        $response = $this->responseRepo->find($safety_id);

        if (empty($response)) {
            return $this->sendError('Road Safety Response not found');
        }

        $response->delete();

        return $this->sendSuccess('Road Safety Response deleted successfully');
    }
}
