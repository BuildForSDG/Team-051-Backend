<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePanicAPIRequest;
use App\Http\Requests\API\UpdatePanicAPIRequest;
use App\Models\Panic;
use App\Repositories\PanicRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PanicController
 * @package App\Http\Controllers\API
 */

class PanicAPIController extends AppBaseController
{
    /** @var  PanicRepository */
    private $panicRepository;

    public function __construct(PanicRepository $panicRepo)
    {
        $this->panicRepository = $panicRepo;
    }

    /**
     * Display a listing of the Panic.
     * GET|HEAD /panics
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $panics = $this->panicRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($panics->toArray(), 'Panics retrieved successfully');
    }

    /**
     * Store a newly created Panic in storage.
     * POST /panics
     *
     * @param CreatePanicAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePanicAPIRequest $request)
    {
        $input = $request->all();

        $panic = $this->panicRepository->create($input);

        return $this->sendResponse($panic->toArray(), 'Panic saved successfully');
    }

    /**
     * Display the specified Panic.
     * GET|HEAD /panics/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Panic $panic */
        $panic = $this->panicRepository->find($id);

        if (empty($panic)) {
            return $this->sendError('Panic not found');
        }

        return $this->sendResponse($panic->toArray(), 'Panic retrieved successfully');
    }

    /**
     * Update the specified Panic in storage.
     * PUT/PATCH /panics/{id}
     *
     * @param int $id
     * @param UpdatePanicAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePanicAPIRequest $request)
    {
        $input = $request->all();

        /** @var Panic $panic */
        $panic = $this->panicRepository->find($id);

        if (empty($panic)) {
            return $this->sendError('Panic not found');
        }

        $panic = $this->panicRepository->update($input, $id);

        return $this->sendResponse($panic->toArray(), 'Panic updated successfully');
    }

    /**
     * Remove the specified Panic from storage.
     * DELETE /panics/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Panic $panic */
        $panic = $this->panicRepository->find($id);

        if (empty($panic)) {
            return $this->sendError('Panic not found');
        }

        $panic->delete();

        return $this->sendSuccess('Panic deleted successfully');
    }
}
