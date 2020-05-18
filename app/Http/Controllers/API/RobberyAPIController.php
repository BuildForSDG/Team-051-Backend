<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRobberyAPIRequest;
use App\Http\Requests\API\UpdateRobberyAPIRequest;
use App\Models\Robbery;
use App\Repositories\RobberyRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class RobberyController
 * @package App\Http\Controllers\API
 */

class RobberyAPIController extends AppBaseController
{
    /** @var  RobberyRepository */
    private $robberyRepository;

    public function __construct(RobberyRepository $robberyRepo)
    {
        $this->robberyRepository = $robberyRepo;
    }

    /**
     * Display a listing of the Robbery.
     * GET|HEAD /robberies
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $robberies = $this->robberyRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($robberies->toArray(), 'Robberies retrieved successfully');
    }

    /**
     * Store a newly created Robbery in storage.
     * POST /robberies
     *
     * @param CreateRobberyAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRobberyAPIRequest $request)
    {
        $input = $request->all();

        $robbery = $this->robberyRepository->create($input);

        return $this->sendResponse($robbery->toArray(), 'Robbery saved successfully');
    }

    /**
     * Display the specified Robbery.
     * GET|HEAD /robberies/{id}
     *
     * @param int $robbery_id
     *
     * @return Response
     */
    public function show($robbery_id)
    {
        /** @var Robbery $robbery */
        $robbery = $this->robberyRepository->find($robbery_id);

        if (empty($robbery)) {
            return $this->sendError('Robbery not found');
        }

        return $this->sendResponse($robbery->toArray(), 'Robbery retrieved successfully');
    }

    /**
     * Update the specified Robbery in storage.
     * PUT/PATCH /robberies/{id}
     *
     * @param int $robbery_id
     * @param UpdateRobberyAPIRequest $request
     *
     * @return Response
     */
    public function update($robbery_id, UpdateRobberyAPIRequest $request)
    {
        $input = $request->all();

        /** @var Robbery $robbery */
        $robbery = $this->robberyRepository->find($robbery_id);

        if (empty($robbery)) {
            return $this->sendError('Robbery not found');
        }

        $robbery = $this->robberyRepository->update($input, $robbery_id);

        return $this->sendResponse($robbery->toArray(), 'Robbery updated successfully');
    }

    /**
     * Remove the specified Robbery from storage.
     * DELETE /robberies/{id}
     *
     * @param int $robbery_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($robbery_id)
    {
        /** @var Robbery $robbery */
        $robbery = $this->robberyRepository->find($robbery_id);

        if (empty($robbery)) {
            return $this->sendError('Robbery not found');
        }

        $robbery->delete();

        return $this->sendSuccess('Robbery deleted successfully');
    }
}
