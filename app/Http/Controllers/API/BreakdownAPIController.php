<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBreakdownAPIRequest;
use App\Http\Requests\API\UpdateBreakdownAPIRequest;
use App\Models\Breakdown;
use App\Repositories\BreakdownRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class BreakdownController
 * @package App\Http\Controllers\API
 */

class BreakdownAPIController extends AppBaseController
{
    /** @var  BreakdownRepository */
    private $breakdownRepository;

    public function __construct(BreakdownRepository $breakdownRepo)
    {
        $this->breakdownRepository = $breakdownRepo;
    }

    /**
     * Display a listing of the Breakdown.
     * GET|HEAD /breakdowns
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $breakdowns = $this->breakdownRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($breakdowns->toArray(), 'Breakdowns retrieved successfully');
    }

    /**
     * Store a newly created Breakdown in storage.
     * POST /breakdowns
     *
     * @param CreateBreakdownAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateBreakdownAPIRequest $request)
    {
        $input = $request->all();

        $breakdown = $this->breakdownRepository->create($input);

        return $this->sendResponse($breakdown->toArray(), 'Breakdown saved successfully');
    }

    /**
     * Display the specified Breakdown.
     * GET|HEAD /breakdowns/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Breakdown $breakdown */
        $breakdown = $this->breakdownRepository->find($id);

        if (empty($breakdown)) {
            return $this->sendError('Breakdown not found');
        }

        return $this->sendResponse($breakdown->toArray(), 'Breakdown retrieved successfully');
    }

    /**
     * Update the specified Breakdown in storage.
     * PUT/PATCH /breakdowns/{id}
     *
     * @param int $id
     * @param UpdateBreakdownAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBreakdownAPIRequest $request)
    {
        $input = $request->all();

        /** @var Breakdown $breakdown */
        $breakdown = $this->breakdownRepository->find($id);

        if (empty($breakdown)) {
            return $this->sendError('Breakdown not found');
        }

        $breakdown = $this->breakdownRepository->update($input, $id);

        return $this->sendResponse($breakdown->toArray(), 'Breakdown updated successfully');
    }

    /**
     * Remove the specified Breakdown from storage.
     * DELETE /breakdowns/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Breakdown $breakdown */
        $breakdown = $this->breakdownRepository->find($id);

        if (empty($breakdown)) {
            return $this->sendError('Breakdown not found');
        }

        $breakdown->delete();

        return $this->sendSuccess('Breakdown deleted successfully');
    }
}
