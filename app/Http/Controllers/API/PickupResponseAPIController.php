<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePickupResponseAPIRequest;
use App\Http\Requests\API\UpdatePickupResponseAPIRequest;
use App\Models\PickupResponse;
use App\Repositories\PickupResponseRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PickupResponseController
 * @package App\Http\Controllers\API
 */

class PickupResponseAPIController extends AppBaseController
{
    /** @var  PickupResponseRepository */
    private $pickupResponseRepository;

    public function __construct(PickupResponseRepository $pickupResponseRepo)
    {
        $this->pickupResponseRepository = $pickupResponseRepo;
    }

    /**
     * Display a listing of the PickupResponse.
     * GET|HEAD /pickupResponses
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $pickupResponses = $this->pickupResponseRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($pickupResponses->toArray(), 'Pickup Responses retrieved successfully');
    }

    /**
     * Store a newly created PickupResponse in storage.
     * POST /pickupResponses
     *
     * @param CreatePickupResponseAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePickupResponseAPIRequest $request)
    {
        $input = $request->all();

        $pickupResponse = $this->pickupResponseRepository->create($input);

        return $this->sendResponse($pickupResponse->toArray(), 'Pickup Response saved successfully');
    }

    /**
     * Display the specified PickupResponse.
     * GET|HEAD /pickupResponses/{id}
     *
     * @param int $response_id
     *
     * @return Response
     */
    public function show($response_id)
    {
        /** @var PickupResponse $pickupResponse */
        $pickupResponse = $this->pickupResponseRepository->find($response_id);

        if (empty($pickupResponse)) {
            return $this->sendError('Pickup Response not found');
        }

        return $this->sendResponse($pickupResponse->toArray(), 'Pickup Response retrieved successfully');
    }

    /**
     * Update the specified PickupResponse in storage.
     * PUT/PATCH /pickupResponses/{id}
     *
     * @param int $response_id
     * @param UpdatePickupResponseAPIRequest $request
     *
     * @return Response
     */
    public function update($response_id, UpdatePickupResponseAPIRequest $request)
    {
        $input = $request->all();

        /** @var PickupResponse $pickupResponse */
        $pickupResponse = $this->pickupResponseRepository->find($response_id);

        if (empty($pickupResponse)) {
            return $this->sendError('Pickup Response not found');
        }

        $pickupResponse = $this->pickupResponseRepository->update($input, $response_id);

        return $this->sendResponse($pickupResponse->toArray(), 'PickupResponse updated successfully');
    }

    /**
     * Remove the specified PickupResponse from storage.
     * DELETE /pickupResponses/{id}
     *
     * @param int $response_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($response_id)
    {
        /** @var PickupResponse $pickupResponse */
        $pickupResponse = $this->pickupResponseRepository->find($response_id);

        if (empty($pickupResponse)) {
            return $this->sendError('Pickup Response not found');
        }

        $pickupResponse->delete();

        return $this->sendSuccess('Pickup Response deleted successfully');
    }
}
