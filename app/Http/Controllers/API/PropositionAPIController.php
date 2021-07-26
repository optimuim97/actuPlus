<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePropositionAPIRequest;
use App\Http\Requests\API\UpdatePropositionAPIRequest;
use App\Models\Proposition;
use App\Repositories\PropositionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PropositionController
 * @package App\Http\Controllers\API
 */

class PropositionAPIController extends AppBaseController
{
    /** @var  PropositionRepository */
    private $propositionRepository;

    public function __construct(PropositionRepository $propositionRepo)
    {
        $this->propositionRepository = $propositionRepo;
    }

    /**
     * Display a listing of the Proposition.
     * GET|HEAD /propositions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $propositions = $this->propositionRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($propositions->toArray(), 'Propositions retrieved successfully');
    }

    /**
     * Store a newly created Proposition in storage.
     * POST /propositions
     *
     * @param CreatePropositionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePropositionAPIRequest $request)
    {
        $input = $request->all();

        $proposition = $this->propositionRepository->create($input);

        return $this->sendResponse($proposition->toArray(), 'Proposition saved successfully');
    }

    /**
     * Display the specified Proposition.
     * GET|HEAD /propositions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Proposition $proposition */
        $proposition = $this->propositionRepository->find($id);

        if (empty($proposition)) {
            return $this->sendError('Proposition not found');
        }

        return $this->sendResponse($proposition->toArray(), 'Proposition retrieved successfully');
    }

    /**
     * Update the specified Proposition in storage.
     * PUT/PATCH /propositions/{id}
     *
     * @param int $id
     * @param UpdatePropositionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropositionAPIRequest $request)
    {
        $input = $request->all();

        /** @var Proposition $proposition */
        $proposition = $this->propositionRepository->find($id);

        if (empty($proposition)) {
            return $this->sendError('Proposition not found');
        }

        $proposition = $this->propositionRepository->update($input, $id);

        return $this->sendResponse($proposition->toArray(), 'Proposition updated successfully');
    }

    /**
     * Remove the specified Proposition from storage.
     * DELETE /propositions/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Proposition $proposition */
        $proposition = $this->propositionRepository->find($id);

        if (empty($proposition)) {
            return $this->sendError('Proposition not found');
        }

        $proposition->delete();

        return $this->sendSuccess('Proposition deleted successfully');
    }
}
