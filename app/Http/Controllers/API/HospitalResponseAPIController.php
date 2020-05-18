<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateHospitalResponseAPIRequest;
use App\Http\Requests\API\UpdateHospitalResponseAPIRequest;
use App\Models\HospitalResponse;
use App\Repositories\HospitalResponseRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class HospitalResponseController
 * @package App\Http\Controllers\API
 */

class HospitalResponseAPIController extends AppBaseController
{
    /** @var  HospitalRepo */
    private $hospitalRepo;

    public function __construct(HospitalResponseRepository $hospitalRepo)
    {
        $this->hospitalRepo = $hospitalRepo;
    }

    /**
     * Display a listing of the HospitalResponse.
     * GET|HEAD /hospitalResponses
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $responses = $this->hospitalRepo->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($responses->toArray(), 'Hospital Responses retrieved successfully');
    }

    /**
     * Store a newly created HospitalResponse in storage.
     * POST /hospitalResponses
     *
     * @param CreateHospitalResponseAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateHospitalResponseAPIRequest $request)
    {
        $input = $request->all();

        $response = $this->hospitalRepo->create($input);

        return $this->sendResponse($response->toArray(), 'Hospital Response saved successfully');
    }

    /**
     * Display the specified HospitalResponse.
     * GET|HEAD /hospitalResponses/{id}
     *
     * @param int $response_id
     *
     * @return Response
     */
    public function show($response_id)
    {
        /** @var HospitalResponse $response */
        $response = $this->hospitalRepo->find($response_id);

        if (empty($response)) {
            return $this->sendError('Hospital Response not found');
        }

        return $this->sendResponse($response->toArray(), 'Hospital Response retrieved successfully');
    }

    /**
     * Update the specified HospitalResponse in storage.
     * PUT/PATCH /hospitalResponses/{id}
     *
     * @param int $response_id
     * @param UpdateHospitalResponseAPIRequest $request
     *
     * @return Response
     */
    public function update($response_id, UpdateHospitalResponseAPIRequest $request)
    {
        $input = $request->all();

        /** @var HospitalResponse $response */
        $response = $this->hospitalRepo->find($response_id);

        if (empty($response)) {
            return $this->sendError('Hospital Response not found');
        }

        $response = $this->hospitalRepo->update($input, $response_id);

        return $this->sendResponse($response->toArray(), 'HospitalResponse updated successfully');
    }

    /**
     * Remove the specified HospitalResponse from storage.
     * DELETE /hospitalResponses/{id}
     *
     * @param int $response_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($response_id)
    {
        /** @var HospitalResponse $response */
        $response = $this->hospitalRepo->find($response_id);

        if (empty($response)) {
            return $this->sendError('Hospital Response not found');
        }

        $response->delete();

        return $this->sendSuccess('Hospital Response deleted successfully');
    }
}
