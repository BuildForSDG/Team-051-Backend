<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSafetyForceAPIRequest;
use App\Http\Requests\API\UpdateSafetyForceAPIRequest;
use App\Models\SafetyForce;
use App\Repositories\SafetyForceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class SafetyForceController
 * @package App\Http\Controllers\API
 */

class SafetyForceAPIController extends AppBaseController
{
    /** @var  SafetyForceRepository */
    private $safetyForceRepository;

    public function __construct(SafetyForceRepository $safetyForceRepo)
    {
        $this->safetyForceRepository = $safetyForceRepo;
    }

    /**
     * Display a listing of the SafetyForce.
     * GET|HEAD /safetyForces
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $safetyForces = $this->safetyForceRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($safetyForces->toArray(), 'Safety Forces retrieved successfully');
    }

    /**
     * Store a newly created SafetyForce in storage.
     * POST /safetyForces
     *
     * @param CreateSafetyForceAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSafetyForceAPIRequest $request)
    {
        $input = $request->all();

        $safetyForce = $this->safetyForceRepository->create($input);

        return $this->sendResponse($safetyForce->toArray(), 'Safety Force saved successfully');
    }

    /**
     * Display the specified SafetyForce.
     * GET|HEAD /safetyForces/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SafetyForce $safetyForce */
        $safetyForce = $this->safetyForceRepository->find($id);

        if (empty($safetyForce)) {
            return $this->sendError('Safety Force not found');
        }

        return $this->sendResponse($safetyForce->toArray(), 'Safety Force retrieved successfully');
    }

    /**
     * Update the specified SafetyForce in storage.
     * PUT/PATCH /safetyForces/{id}
     *
     * @param int $id
     * @param UpdateSafetyForceAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSafetyForceAPIRequest $request)
    {
        $input = $request->all();

        /** @var SafetyForce $safetyForce */
        $safetyForce = $this->safetyForceRepository->find($id);

        if (empty($safetyForce)) {
            return $this->sendError('Safety Force not found');
        }

        $safetyForce = $this->safetyForceRepository->update($input, $id);

        return $this->sendResponse($safetyForce->toArray(), 'SafetyForce updated successfully');
    }

    /**
     * Remove the specified SafetyForce from storage.
     * DELETE /safetyForces/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SafetyForce $safetyForce */
        $safetyForce = $this->safetyForceRepository->find($id);

        if (empty($safetyForce)) {
            return $this->sendError('Safety Force not found');
        }

        $safetyForce->delete();

        return $this->sendSuccess('Safety Force deleted successfully');
    }
}
