<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateKidnappingAPIRequest;
use App\Http\Requests\API\UpdateKidnappingAPIRequest;
use App\Models\Kidnapping;
use App\Repositories\KidnappingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class KidnappingController
 * @package App\Http\Controllers\API
 */

class KidnappingAPIController extends AppBaseController
{
    /** @var  KidnappingRepository */
    private $kidnappingRepository;

    public function __construct(KidnappingRepository $kidnappingRepo)
    {
        $this->kidnappingRepository = $kidnappingRepo;
    }

    /**
     * Display a listing of the Kidnapping.
     * GET|HEAD /kidnappings
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $kidnappings = $this->kidnappingRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($kidnappings->toArray(), 'Kidnappings retrieved successfully');
    }

    /**
     * Store a newly created Kidnapping in storage.
     * POST /kidnappings
     *
     * @param CreateKidnappingAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateKidnappingAPIRequest $request)
    {
        $input = $request->all();

        $kidnapping = $this->kidnappingRepository->create($input);

        return $this->sendResponse($kidnapping->toArray(), 'Kidnapping saved successfully');
    }

    /**
     * Display the specified Kidnapping.
     * GET|HEAD /kidnappings/{id}
     *
     * @param int $kidnapping_id
     *
     * @return Response
     */
    public function show($kidnapping_id)
    {
        /** @var Kidnapping $kidnapping */
        $kidnapping = $this->kidnappingRepository->find($kidnapping_id);

        if (empty($kidnapping)) {
            return $this->sendError('Kidnapping not found');
        }

        return $this->sendResponse($kidnapping->toArray(), 'Kidnapping retrieved successfully');
    }

    /**
     * Update the specified Kidnapping in storage.
     * PUT/PATCH /kidnappings/{id}
     *
     * @param int $kidnapping_id
     * @param UpdateKidnappingAPIRequest $request
     *
     * @return Response
     */
    public function update($kidnapping_id, UpdateKidnappingAPIRequest $request)
    {
        $input = $request->all();

        /** @var Kidnapping $kidnapping */
        $kidnapping = $this->kidnappingRepository->find($kidnapping_id);

        if (empty($kidnapping)) {
            return $this->sendError('Kidnapping not found');
        }

        $kidnapping = $this->kidnappingRepository->update($input, $kidnapping_id);

        return $this->sendResponse($kidnapping->toArray(), 'Kidnapping updated successfully');
    }

    /**
     * Remove the specified Kidnapping from storage.
     * DELETE /kidnappings/{id}
     *
     * @param int $kidnapping_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($kidnapping_id)
    {
        /** @var Kidnapping $kidnapping */
        $kidnapping = $this->kidnappingRepository->find($kidnapping_id);

        if (empty($kidnapping)) {
            return $this->sendError('Kidnapping not found');
        }

        $kidnapping->delete();

        return $this->sendSuccess('Kidnapping deleted successfully');
    }
}
