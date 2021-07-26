<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCriticalAPIRequest;
use App\Http\Requests\API\UpdateCriticalAPIRequest;
use App\Models\Critical;
use App\Repositories\CriticalRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CriticalController
 * @package App\Http\Controllers\API
 */

class CriticalAPIController extends AppBaseController
{
    /** @var  CriticalRepository */
    private $criticalRepository;

    public function __construct(CriticalRepository $criticalRepo)
    {
        $this->criticalRepository = $criticalRepo;
    }

    /**
     * Display a listing of the Critical.
     * GET|HEAD /criticals
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $criticals = $this->criticalRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($criticals->toArray(), 'Criticals retrieved successfully');
    }

    /**
     * Store a newly created Critical in storage.
     * POST /criticals
     *
     * @param CreateCriticalAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCriticalAPIRequest $request)
    {
        $input = $request->all();

        $critical = $this->criticalRepository->create($input);

        return $this->sendResponse($critical->toArray(), 'Critical saved successfully');
    }

    /**
     * Display the specified Critical.
     * GET|HEAD /criticals/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Critical $critical */
        $critical = $this->criticalRepository->find($id);

        if (empty($critical)) {
            return $this->sendError('Critical not found');
        }

        return $this->sendResponse($critical->toArray(), 'Critical retrieved successfully');
    }

    /**
     * Update the specified Critical in storage.
     * PUT/PATCH /criticals/{id}
     *
     * @param int $id
     * @param UpdateCriticalAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCriticalAPIRequest $request)
    {
        $input = $request->all();

        /** @var Critical $critical */
        $critical = $this->criticalRepository->find($id);

        if (empty($critical)) {
            return $this->sendError('Critical not found');
        }

        $critical = $this->criticalRepository->update($input, $id);

        return $this->sendResponse($critical->toArray(), 'Critical updated successfully');
    }

    /**
     * Remove the specified Critical from storage.
     * DELETE /criticals/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Critical $critical */
        $critical = $this->criticalRepository->find($id);

        if (empty($critical)) {
            return $this->sendError('Critical not found');
        }

        $critical->delete();

        return $this->sendSuccess('Critical deleted successfully');
    }
}
