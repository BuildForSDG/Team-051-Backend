<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePickupAPIRequest;
use App\Http\Requests\API\UpdatePickupAPIRequest;
use App\Models\Pickup;
use App\Repositories\PickupRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PickupController
 * @package App\Http\Controllers\API
 */

class PickupAPIController extends AppBaseController
{
    /** @var  PickupRepository */
    private $pickupRepository;

    public function __construct(PickupRepository $pickupRepo)
    {
        $this->pickupRepository = $pickupRepo;
    }

    /**
     * Display a listing of the Pickup.
     * GET|HEAD /pickups
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $pickups = $this->pickupRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($pickups->toArray(), 'Pickups retrieved successfully');
    }

    /**
     * Store a newly created Pickup in storage.
     * POST /pickups
     *
     * @param CreatePickupAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePickupAPIRequest $request)
    {
        $input = $request->all();

        $pickup = $this->pickupRepository->create($input);

        return $this->sendResponse($pickup->toArray(), 'Pickup saved successfully');
    }

    /**
     * Display the specified Pickup.
     * GET|HEAD /pickups/{id}
     *
     * @param int $pickup_id
     *
     * @return Response
     */
    public function show($pickup_id)
    {
        /** @var Pickup $pickup */
        $pickup = $this->pickupRepository->find($pickup_id);

        if (empty($pickup)) {
            return $this->sendError('Pickup not found');
        }

        return $this->sendResponse($pickup->toArray(), 'Pickup retrieved successfully');
    }

    /**
     * Update the specified Pickup in storage.
     * PUT/PATCH /pickups/{id}
     *
     * @param int $pickup_id
     * @param UpdatePickupAPIRequest $request
     *
     * @return Response
     */
    public function update($pickup_id, UpdatePickupAPIRequest $request)
    {
        $input = $request->all();

        /** @var Pickup $pickup */
        $pickup = $this->pickupRepository->find($pickup_id);

        if (empty($pickup)) {
            return $this->sendError('Pickup not found');
        }

        $pickup = $this->pickupRepository->update($input, $pickup_id);

        return $this->sendResponse($pickup->toArray(), 'Pickup updated successfully');
    }

    /**
     * Remove the specified Pickup from storage.
     * DELETE /pickups/{id}
     *
     * @param int $pickup_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($pickup_id)
    {
        /** @var Pickup $pickup */
        $pickup = $this->pickupRepository->find($pickup_id);

        if (empty($pickup)) {
            return $this->sendError('Pickup not found');
        }

        $pickup->delete();

        return $this->sendSuccess('Pickup deleted successfully');
    }
}
