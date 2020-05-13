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
    /** @var  HospitalResponseRepository */
    private $hospitalResponseRepository;

    public function __construct(HospitalResponseRepository $hospitalResponseRepo)
    {
        $this->hospitalResponseRepository = $hospitalResponseRepo;
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
        $hospitalResponses = $this->hospitalResponseRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($hospitalResponses->toArray(), 'Hospital Responses retrieved successfully');
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

        $hospitalResponse = $this->hospitalResponseRepository->create($input);

        return $this->sendResponse($hospitalResponse->toArray(), 'Hospital Response saved successfully');
    }

    /**
     * Display the specified HospitalResponse.
     * GET|HEAD /hospitalResponses/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var HospitalResponse $hospitalResponse */
        $hospitalResponse = $this->hospitalResponseRepository->find($id);

        if (empty($hospitalResponse)) {
            return $this->sendError('Hospital Response not found');
        }

        return $this->sendResponse($hospitalResponse->toArray(), 'Hospital Response retrieved successfully');
    }

    /**
     * Update the specified HospitalResponse in storage.
     * PUT/PATCH /hospitalResponses/{id}
     *
     * @param int $id
     * @param UpdateHospitalResponseAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHospitalResponseAPIRequest $request)
    {
        $input = $request->all();

        /** @var HospitalResponse $hospitalResponse */
        $hospitalResponse = $this->hospitalResponseRepository->find($id);

        if (empty($hospitalResponse)) {
            return $this->sendError('Hospital Response not found');
        }

        $hospitalResponse = $this->hospitalResponseRepository->update($input, $id);

        return $this->sendResponse($hospitalResponse->toArray(), 'HospitalResponse updated successfully');
    }

    /**
     * Remove the specified HospitalResponse from storage.
     * DELETE /hospitalResponses/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var HospitalResponse $hospitalResponse */
        $hospitalResponse = $this->hospitalResponseRepository->find($id);

        if (empty($hospitalResponse)) {
            return $this->sendError('Hospital Response not found');
        }

        $hospitalResponse->delete();

        return $this->sendSuccess('Hospital Response deleted successfully');
    }
}
