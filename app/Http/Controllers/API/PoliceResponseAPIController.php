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
    private $policeResponseRepository;

    public function __construct(PoliceResponseRepository $policeResponseRepo)
    {
        $this->policeResponseRepository = $policeResponseRepo;
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
        $policeResponses = $this->policeResponseRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($policeResponses->toArray(), 'Police Responses retrieved successfully');
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

        $policeResponse = $this->policeResponseRepository->create($input);

        return $this->sendResponse($policeResponse->toArray(), 'Police Response saved successfully');
    }

    /**
     * Display the specified PoliceResponse.
     * GET|HEAD /policeResponses/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PoliceResponse $policeResponse */
        $policeResponse = $this->policeResponseRepository->find($id);

        if (empty($policeResponse)) {
            return $this->sendError('Police Response not found');
        }

        return $this->sendResponse($policeResponse->toArray(), 'Police Response retrieved successfully');
    }

    /**
     * Update the specified PoliceResponse in storage.
     * PUT/PATCH /policeResponses/{id}
     *
     * @param int $id
     * @param UpdatePoliceResponseAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePoliceResponseAPIRequest $request)
    {
        $input = $request->all();

        /** @var PoliceResponse $policeResponse */
        $policeResponse = $this->policeResponseRepository->find($id);

        if (empty($policeResponse)) {
            return $this->sendError('Police Response not found');
        }

        $policeResponse = $this->policeResponseRepository->update($input, $id);

        return $this->sendResponse($policeResponse->toArray(), 'PoliceResponse updated successfully');
    }

    /**
     * Remove the specified PoliceResponse from storage.
     * DELETE /policeResponses/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PoliceResponse $policeResponse */
        $policeResponse = $this->policeResponseRepository->find($id);

        if (empty($policeResponse)) {
            return $this->sendError('Police Response not found');
        }

        $policeResponse->delete();

        return $this->sendSuccess('Police Response deleted successfully');
    }
}
