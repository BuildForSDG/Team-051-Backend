<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTowResponseAPIRequest;
use App\Http\Requests\API\UpdateTowResponseAPIRequest;
use App\Models\TowResponse;
use App\Repositories\TowResponseRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TowResponseController
 * @package App\Http\Controllers\API
 */

class TowResponseAPIController extends AppBaseController
{
    /** @var  TowResponseRepository */
    private $towResponseRepository;

    public function __construct(TowResponseRepository $towResponseRepo)
    {
        $this->towResponseRepository = $towResponseRepo;
    }

    /**
     * Display a listing of the TowResponse.
     * GET|HEAD /towResponses
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $towResponses = $this->towResponseRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($towResponses->toArray(), 'Tow Responses retrieved successfully');
    }

    /**
     * Store a newly created TowResponse in storage.
     * POST /towResponses
     *
     * @param CreateTowResponseAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTowResponseAPIRequest $request)
    {
        $input = $request->all();

        $towResponse = $this->towResponseRepository->create($input);

        return $this->sendResponse($towResponse->toArray(), 'Tow Response saved successfully');
    }

    /**
     * Display the specified TowResponse.
     * GET|HEAD /towResponses/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TowResponse $towResponse */
        $towResponse = $this->towResponseRepository->find($id);

        if (empty($towResponse)) {
            return $this->sendError('Tow Response not found');
        }

        return $this->sendResponse($towResponse->toArray(), 'Tow Response retrieved successfully');
    }

    /**
     * Update the specified TowResponse in storage.
     * PUT/PATCH /towResponses/{id}
     *
     * @param int $id
     * @param UpdateTowResponseAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTowResponseAPIRequest $request)
    {
        $input = $request->all();

        /** @var TowResponse $towResponse */
        $towResponse = $this->towResponseRepository->find($id);

        if (empty($towResponse)) {
            return $this->sendError('Tow Response not found');
        }

        $towResponse = $this->towResponseRepository->update($input, $id);

        return $this->sendResponse($towResponse->toArray(), 'TowResponse updated successfully');
    }

    /**
     * Remove the specified TowResponse from storage.
     * DELETE /towResponses/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TowResponse $towResponse */
        $towResponse = $this->towResponseRepository->find($id);

        if (empty($towResponse)) {
            return $this->sendError('Tow Response not found');
        }

        $towResponse->delete();

        return $this->sendSuccess('Tow Response deleted successfully');
    }
}
