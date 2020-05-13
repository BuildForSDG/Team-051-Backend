<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTowerAPIRequest;
use App\Http\Requests\API\UpdateTowerAPIRequest;
use App\Models\Tower;
use App\Repositories\TowerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TowerController
 * @package App\Http\Controllers\API
 */

class TowerAPIController extends AppBaseController
{
    /** @var  TowerRepository */
    private $towerRepository;

    public function __construct(TowerRepository $towerRepo)
    {
        $this->towerRepository = $towerRepo;
    }

    /**
     * Display a listing of the Tower.
     * GET|HEAD /towers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $towers = $this->towerRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($towers->toArray(), 'Towers retrieved successfully');
    }

    /**
     * Store a newly created Tower in storage.
     * POST /towers
     *
     * @param CreateTowerAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTowerAPIRequest $request)
    {
        $input = $request->all();

        $tower = $this->towerRepository->create($input);

        return $this->sendResponse($tower->toArray(), 'Tower saved successfully');
    }

    /**
     * Display the specified Tower.
     * GET|HEAD /towers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Tower $tower */
        $tower = $this->towerRepository->find($id);

        if (empty($tower)) {
            return $this->sendError('Tower not found');
        }

        return $this->sendResponse($tower->toArray(), 'Tower retrieved successfully');
    }

    /**
     * Update the specified Tower in storage.
     * PUT/PATCH /towers/{id}
     *
     * @param int $id
     * @param UpdateTowerAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTowerAPIRequest $request)
    {
        $input = $request->all();

        /** @var Tower $tower */
        $tower = $this->towerRepository->find($id);

        if (empty($tower)) {
            return $this->sendError('Tower not found');
        }

        $tower = $this->towerRepository->update($input, $id);

        return $this->sendResponse($tower->toArray(), 'Tower updated successfully');
    }

    /**
     * Remove the specified Tower from storage.
     * DELETE /towers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Tower $tower */
        $tower = $this->towerRepository->find($id);

        if (empty($tower)) {
            return $this->sendError('Tower not found');
        }

        $tower->delete();

        return $this->sendSuccess('Tower deleted successfully');
    }
}
