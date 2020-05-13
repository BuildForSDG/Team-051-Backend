<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRoadAPIRequest;
use App\Http\Requests\API\UpdateRoadAPIRequest;
use App\Models\Road;
use App\Repositories\RoadRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class RoadController
 * @package App\Http\Controllers\API
 */

class RoadAPIController extends AppBaseController
{
    /** @var  RoadRepository */
    private $roadRepository;

    public function __construct(RoadRepository $roadRepo)
    {
        $this->roadRepository = $roadRepo;
    }

    /**
     * Display a listing of the Road.
     * GET|HEAD /roads
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $roads = $this->roadRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($roads->toArray(), 'Roads retrieved successfully');
    }

    /**
     * Store a newly created Road in storage.
     * POST /roads
     *
     * @param CreateRoadAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRoadAPIRequest $request)
    {
        $input = $request->all();

        $road = $this->roadRepository->create($input);

        return $this->sendResponse($road->toArray(), 'Road saved successfully');
    }

    /**
     * Display the specified Road.
     * GET|HEAD /roads/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Road $road */
        $road = $this->roadRepository->find($id);

        if (empty($road)) {
            return $this->sendError('Road not found');
        }

        return $this->sendResponse($road->toArray(), 'Road retrieved successfully');
    }

    /**
     * Update the specified Road in storage.
     * PUT/PATCH /roads/{id}
     *
     * @param int $id
     * @param UpdateRoadAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoadAPIRequest $request)
    {
        $input = $request->all();

        /** @var Road $road */
        $road = $this->roadRepository->find($id);

        if (empty($road)) {
            return $this->sendError('Road not found');
        }

        $road = $this->roadRepository->update($input, $id);

        return $this->sendResponse($road->toArray(), 'Road updated successfully');
    }

    /**
     * Remove the specified Road from storage.
     * DELETE /roads/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Road $road */
        $road = $this->roadRepository->find($id);

        if (empty($road)) {
            return $this->sendError('Road not found');
        }

        $road->delete();

        return $this->sendSuccess('Road deleted successfully');
    }
}
