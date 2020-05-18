<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAccidentAPIRequest;
use App\Http\Requests\API\UpdateAccidentAPIRequest;
use App\Models\Accident;
use App\Repositories\AccidentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class AccidentController
 * @package App\Http\Controllers\API
 */

class AccidentAPIController extends AppBaseController
{
    /** @var  AccidentRepository */
    private $accidentRepository;

    public function __construct(AccidentRepository $accidentRepo)
    {
        $this->accidentRepository = $accidentRepo;
    }

    /**
     * Display a listing of the Accident.
     * GET|HEAD /accidents
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $accidents = $this->accidentRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($accidents->toArray(), 'Accidents retrieved successfully');
    }

    /**
     * Store a newly created Accident in storage.
     * POST /accidents
     *
     * @param CreateAccidentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAccidentAPIRequest $request)
    {
        $input = $request->all();

        $accident = $this->accidentRepository->create($input);

        return $this->sendResponse($accident->toArray(), 'Accident saved successfully');
    }

    /**
     * Display the specified Accident.
     * GET|HEAD /accidents/{accident_id}
     *
     * @param int $accident_id
     *
     * @return Response
     */
    public function show($accident_id)
    {
        /** @var Accident $accident */
        $accident = $this->accidentRepository->find($accident_id);

        if (empty($accident)) {
            return $this->sendError('Accident not found');
        }

        return $this->sendResponse($accident->toArray(), 'Accident retrieved successfully');
    }

    /**
     * Update the specified Accident in storage.
     * PUT/PATCH /accidents/{accident_id}
     *
     * @param int $accident_id
     * @param UpdateAccidentAPIRequest $request
     *
     * @return Response
     */
    public function update($accident_id, UpdateAccidentAPIRequest $request)
    {
        $input = $request->all();

        /** @var Accident $accident */
        $accident = $this->accidentRepository->find($accident_id);

        if (empty($accident)) {
            return $this->sendError('Accident not found');
        }

        $accident = $this->accidentRepository->update($input, $accident_id);

        return $this->sendResponse($accident->toArray(), 'Accident updated successfully');
    }

    /**
     * Remove the specified Accident from storage.
     * DELETE /accidents/{accident_id}
     *
     * @param int $accident_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($accident_id)
    {
        /** @var Accident $accident */
        $accident = $this->accidentRepository->find($accident_id);

        if (empty($accident)) {
            return $this->sendError('Accident not found');
        }

        $accident->delete();

        return $this->sendSuccess('Accident deleted successfully');
    }
}
