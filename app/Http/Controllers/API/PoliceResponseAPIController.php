<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePoliceResponseAPIRequest;
use App\Http\Requests\API\UpdatePoliceResponseAPIRequest;
use App\Models\PoliceResponse;
use App\Repositories\PoliceResponseRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PoliceResponseController
 * @package App\Http\Controllers\API
 */

class PoliceResponseAPIController extends AppBaseController
{
    /** @var  PoliceResponseRepository */
    private $policeRepo;

    public function __construct(PoliceResponseRepository $policeRepo)
    {
        $this->policeRepo = $policeRepo;
    }

    /**
     * Display a listing of the PoliceResponse.
     * GET|HEAD /policeResponses
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $responses = $this->policeRepo->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($responses->toArray(), 'Police Responses retrieved successfully');
    }

    /**
     * Store a newly created PoliceResponse in storage.
     * POST /policeResponses
     *
     * @param CreatePoliceResponseAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePoliceResponseAPIRequest $request)
    {
        $input = $request->all();

        $response = $this->policeRepo->create($input);

        return $this->sendResponse($response->toArray(), 'Police Response saved successfully');
    }

    /**
     * Display the specified PoliceResponse.
     * GET|HEAD /policeResponses/{id}
     *
     * @param int $response_id
     *
     * @return Response
     */
    public function show($response_id)
    {
        /** @var PoliceResponse $response */
        $response = $this->policeRepo->find($response_id);

        if (empty($response)) {
            return $this->sendError('Police Response not found');
        }

        return $this->sendResponse($response->toArray(), 'Police Response retrieved successfully');
    }

    /**
     * Update the specified PoliceResponse in storage.
     * PUT/PATCH /policeResponses/{id}
     *
     * @param int $response_id
     * @param UpdatePoliceResponseAPIRequest $request
     *
     * @return Response
     */
    public function update($response_id, UpdatePoliceResponseAPIRequest $request)
    {
        $input = $request->all();

        /** @var PoliceResponse $response */
        $response = $this->policeRepo->find($response_id);

        if (empty($response)) {
            return $this->sendError('Police Response not found');
        }

        $response = $this->policeRepo->update($input, $response_id);

        return $this->sendResponse($response->toArray(), 'PoliceResponse updated successfully');
    }

    /**
     * Remove the specified PoliceResponse from storage.
     * DELETE /policeResponses/{id}
     *
     * @param int $response_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($response_id)
    {
        /** @var PoliceResponse $response */
        $response = $this->policeRepo->find($response_id);

        if (empty($response)) {
            return $this->sendError('Police Response not found');
        }

        $response->delete();

        return $this->sendSuccess('Police Response deleted successfully');
    }
}
