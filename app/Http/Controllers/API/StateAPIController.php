<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateStateAPIRequest;
use App\Http\Requests\API\UpdateStateAPIRequest;
use App\Models\State;
use App\Repositories\StateRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class StateController
 * @package App\Http\Controllers\API
 */

class StateAPIController extends AppBaseController
{
    /** @var  StateRepository */
    private $stateRepository;

    public function __construct(StateRepository $stateRepo)
    {
        $this->stateRepository = $stateRepo;
    }

    /**
     * Display a listing of the State.
     * GET|HEAD /states
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $states = $this->stateRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($states->toArray(), 'States retrieved successfully');
    }

    /**
     * Store a newly created State in storage.
     * POST /states
     *
     * @param CreateStateAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateStateAPIRequest $request)
    {
        $input = $request->all();

        $state = $this->stateRepository->create($input);

        return $this->sendResponse($state->toArray(), 'State saved successfully');
    }

    /**
     * Display the specified State.
     * GET|HEAD /states/{id}
     *
     * @param int $state_id
     *
     * @return Response
     */
    public function show($state_id)
    {
        /** @var State $state */
        $state = $this->stateRepository->find($state_id);

        if (empty($state)) {
            return $this->sendError('State not found');
        }

        return $this->sendResponse($state->toArray(), 'State retrieved successfully');
    }

    /**
     * Update the specified State in storage.
     * PUT/PATCH /states/{id}
     *
     * @param int $state_id
     * @param UpdateStateAPIRequest $request
     *
     * @return Response
     */
    public function update($state_id, UpdateStateAPIRequest $request)
    {
        $input = $request->all();

        /** @var State $state */
        $state = $this->stateRepository->find($state_id);

        if (empty($state)) {
            return $this->sendError('State not found');
        }

        $state = $this->stateRepository->update($input, $state_id);

        return $this->sendResponse($state->toArray(), 'State updated successfully');
    }

    /**
     * Remove the specified State from storage.
     * DELETE /states/{id}
     *
     * @param int $state_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($state_id)
    {
        /** @var State $state */
        $state = $this->stateRepository->find($state_id);

        if (empty($state)) {
            return $this->sendError('State not found');
        }

        $state->delete();

        return $this->sendSuccess('State deleted successfully');
    }
}
