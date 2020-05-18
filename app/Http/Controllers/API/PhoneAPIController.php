<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePhoneAPIRequest;
use App\Http\Requests\API\UpdatePhoneAPIRequest;
use App\Models\Phone;
use App\Repositories\PhoneRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PhoneController
 * @package App\Http\Controllers\API
 */

class PhoneAPIController extends AppBaseController
{
    /** @var  PhoneRepository */
    private $phoneRepository;

    public function __construct(PhoneRepository $phoneRepo)
    {
        $this->phoneRepository = $phoneRepo;
    }

    /**
     * Display a listing of the Phone.
     * GET|HEAD /phones
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $phones = $this->phoneRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($phones->toArray(), 'Phones retrieved successfully');
    }

    /**
     * Store a newly created Phone in storage.
     * POST /phones
     *
     * @param CreatePhoneAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePhoneAPIRequest $request)
    {
        $input = $request->all();

        $phone = $this->phoneRepository->create($input);

        return $this->sendResponse($phone->toArray(), 'Phone saved successfully');
    }

    /**
     * Display the specified Phone.
     * GET|HEAD /phones/{id}
     *
     * @param int $phone_id
     *
     * @return Response
     */
    public function show($phone_id)
    {
        /** @var Phone $phone */
        $phone = $this->phoneRepository->find($phone_id);

        if (empty($phone)) {
            return $this->sendError('Phone not found');
        }

        return $this->sendResponse($phone->toArray(), 'Phone retrieved successfully');
    }

    /**
     * Update the specified Phone in storage.
     * PUT/PATCH /phones/{id}
     *
     * @param int $phone_id
     * @param UpdatePhoneAPIRequest $request
     *
     * @return Response
     */
    public function update($phone_id, UpdatePhoneAPIRequest $request)
    {
        $input = $request->all();

        /** @var Phone $phone */
        $phone = $this->phoneRepository->find($phone_id);

        if (empty($phone)) {
            return $this->sendError('Phone not found');
        }

        $phone = $this->phoneRepository->update($input, $phone_id);

        return $this->sendResponse($phone->toArray(), 'Phone updated successfully');
    }

    /**
     * Remove the specified Phone from storage.
     * DELETE /phones/{id}
     *
     * @param int $phone_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($phone_id)
    {
        /** @var Phone $phone */
        $phone = $this->phoneRepository->find($phone_id);

        if (empty($phone)) {
            return $this->sendError('Phone not found');
        }

        $phone->delete();

        return $this->sendSuccess('Phone deleted successfully');
    }
}
