<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFailedJobAPIRequest;
use App\Http\Requests\API\UpdateFailedJobAPIRequest;
use App\Models\FailedJob;
use App\Repositories\FailedJobRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class FailedJobController
 * @package App\Http\Controllers\API
 */

class FailedJobAPIController extends AppBaseController
{
    /** @var  FailedJobRepository */
    private $failedJobRepository;

    public function __construct(FailedJobRepository $failedJobRepo)
    {
        $this->failedJobRepository = $failedJobRepo;
    }

    /**
     * Display a listing of the FailedJob.
     * GET|HEAD /failedJobs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $failedJobs = $this->failedJobRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($failedJobs->toArray(), 'Failed Jobs retrieved successfully');
    }

    /**
     * Store a newly created FailedJob in storage.
     * POST /failedJobs
     *
     * @param CreateFailedJobAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFailedJobAPIRequest $request)
    {
        $input = $request->all();

        $failedJob = $this->failedJobRepository->create($input);

        return $this->sendResponse($failedJob->toArray(), 'Failed Job saved successfully');
    }

    /**
     * Display the specified FailedJob.
     * GET|HEAD /failedJobs/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var FailedJob $failedJob */
        $failedJob = $this->failedJobRepository->find($id);

        if (empty($failedJob)) {
            return $this->sendError('Failed Job not found');
        }

        return $this->sendResponse($failedJob->toArray(), 'Failed Job retrieved successfully');
    }

    /**
     * Update the specified FailedJob in storage.
     * PUT/PATCH /failedJobs/{id}
     *
     * @param int $id
     * @param UpdateFailedJobAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFailedJobAPIRequest $request)
    {
        $input = $request->all();

        /** @var FailedJob $failedJob */
        $failedJob = $this->failedJobRepository->find($id);

        if (empty($failedJob)) {
            return $this->sendError('Failed Job not found');
        }

        $failedJob = $this->failedJobRepository->update($input, $id);

        return $this->sendResponse($failedJob->toArray(), 'FailedJob updated successfully');
    }

    /**
     * Remove the specified FailedJob from storage.
     * DELETE /failedJobs/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var FailedJob $failedJob */
        $failedJob = $this->failedJobRepository->find($id);

        if (empty($failedJob)) {
            return $this->sendError('Failed Job not found');
        }

        $failedJob->delete();

        return $this->sendSuccess('Failed Job deleted successfully');
    }
}
