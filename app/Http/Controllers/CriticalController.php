<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCriticalRequest;
use App\Http\Requests\UpdateCriticalRequest;
use App\Repositories\CriticalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CriticalController extends AppBaseController
{
    /** @var  CriticalRepository */
    private $criticalRepository;

    public function __construct(CriticalRepository $criticalRepo)
    {
        $this->criticalRepository = $criticalRepo;
    }

    /**
     * Display a listing of the Critical.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $criticals = $this->criticalRepository->all();

        return view('criticals.index')
            ->with('criticals', $criticals);
    }

    /**
     * Show the form for creating a new Critical.
     *
     * @return Response
     */
    public function create()
    {
        return view('criticals.create');
    }

    /**
     * Store a newly created Critical in storage.
     *
     * @param CreateCriticalRequest $request
     *
     * @return Response
     */
    public function store(CreateCriticalRequest $request)
    {
        $input = $request->all();

        $critical = $this->criticalRepository->create($input);

        Flash::success('Critical saved successfully.');

        return redirect(route('criticals.index'));
    }

    /**
     * Display the specified Critical.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $critical = $this->criticalRepository->find($id);

        if (empty($critical)) {
            Flash::error('Critical not found');

            return redirect(route('criticals.index'));
        }

        return view('criticals.show')->with('critical', $critical);
    }

    /**
     * Show the form for editing the specified Critical.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $critical = $this->criticalRepository->find($id);

        if (empty($critical)) {
            Flash::error('Critical not found');

            return redirect(route('criticals.index'));
        }

        return view('criticals.edit')->with('critical', $critical);
    }

    /**
     * Update the specified Critical in storage.
     *
     * @param int $id
     * @param UpdateCriticalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCriticalRequest $request)
    {
        $critical = $this->criticalRepository->find($id);

        if (empty($critical)) {
            Flash::error('Critical not found');

            return redirect(route('criticals.index'));
        }

        $critical = $this->criticalRepository->update($request->all(), $id);

        Flash::success('Critical updated successfully.');

        return redirect(route('criticals.index'));
    }

    /**
     * Remove the specified Critical from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $critical = $this->criticalRepository->find($id);

        if (empty($critical)) {
            Flash::error('Critical not found');

            return redirect(route('criticals.index'));
        }

        $this->criticalRepository->delete($id);

        Flash::success('Critical deleted successfully.');

        return redirect(route('criticals.index'));
    }
}
