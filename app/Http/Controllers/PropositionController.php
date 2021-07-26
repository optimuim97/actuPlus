<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePropositionRequest;
use App\Http\Requests\UpdatePropositionRequest;
use App\Repositories\PropositionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PropositionController extends AppBaseController
{
    /** @var  PropositionRepository */
    private $propositionRepository;

    public function __construct(PropositionRepository $propositionRepo)
    {
        $this->propositionRepository = $propositionRepo;
    }

    /**
     * Display a listing of the Proposition.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $propositions = $this->propositionRepository->all();

        return view('propositions.index')
            ->with('propositions', $propositions);
    }

    /**
     * Show the form for creating a new Proposition.
     *
     * @return Response
     */
    public function create()
    {
        return view('propositions.create');
    }

    /**
     * Store a newly created Proposition in storage.
     *
     * @param CreatePropositionRequest $request
     *
     * @return Response
     */
    public function store(CreatePropositionRequest $request)
    {
        $input = $request->all();

        $proposition = $this->propositionRepository->create($input);

        Flash::success('Proposition saved successfully.');

        return redirect(route('propositions.index'));
    }

    /**
     * Display the specified Proposition.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proposition = $this->propositionRepository->find($id);

        if (empty($proposition)) {
            Flash::error('Proposition not found');

            return redirect(route('propositions.index'));
        }

        return view('propositions.show')->with('proposition', $proposition);
    }

    /**
     * Show the form for editing the specified Proposition.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $proposition = $this->propositionRepository->find($id);

        if (empty($proposition)) {
            Flash::error('Proposition not found');

            return redirect(route('propositions.index'));
        }

        return view('propositions.edit')->with('proposition', $proposition);
    }

    /**
     * Update the specified Proposition in storage.
     *
     * @param int $id
     * @param UpdatePropositionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropositionRequest $request)
    {
        $proposition = $this->propositionRepository->find($id);

        if (empty($proposition)) {
            Flash::error('Proposition not found');

            return redirect(route('propositions.index'));
        }

        $proposition = $this->propositionRepository->update($request->all(), $id);

        Flash::success('Proposition updated successfully.');

        return redirect(route('propositions.index'));
    }

    /**
     * Remove the specified Proposition from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proposition = $this->propositionRepository->find($id);

        if (empty($proposition)) {
            Flash::error('Proposition not found');

            return redirect(route('propositions.index'));
        }

        $this->propositionRepository->delete($id);

        Flash::success('Proposition deleted successfully.');

        return redirect(route('propositions.index'));
    }
}
