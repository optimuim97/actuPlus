<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentTypeRequest;
use App\Http\Requests\UpdateCommentTypeRequest;
use App\Repositories\CommentTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Flash;
use Response;

class CommentTypeController extends AppBaseController
{
    /** @var  CommentTypeRepository */
    private $commentTypeRepository;

    public function __construct(CommentTypeRepository $commentTypeRepo)
    {
        $this->commentTypeRepository = $commentTypeRepo;
    }

    /**
     * Display a listing of the CommentType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $commentTypes = $this->commentTypeRepository->all();

        return view('comment_types.index')
            ->with('commentTypes', $commentTypes);
    }

    /**
     * Show the form for creating a new CommentType.
     *
     * @return Response
     */
    public function create()
    {
        return view('comment_types.create');
    }

    /**
     * Store a newly created CommentType in storage.
     *
     * @param CreateCommentTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateCommentTypeRequest $request)
    {
        $input = $request->all();

        $input['slug'] = Str::slug($input['name']);

        $commentType = $this->commentTypeRepository->create($input);

        Flash::success('Comment Type saved successfully.');

        return redirect(route('commentTypes.index'));
    }

    /**
     * Display the specified CommentType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $commentType = $this->commentTypeRepository->find($id);

        if (empty($commentType)) {
            Flash::error('Comment Type not found');

            return redirect(route('commentTypes.index'));
        }

        return view('comment_types.show')->with('commentType', $commentType);
    }

    /**
     * Show the form for editing the specified CommentType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $commentType = $this->commentTypeRepository->find($id);

        if (empty($commentType)) {
            Flash::error('Comment Type not found');

            return redirect(route('commentTypes.index'));
        }

        return view('comment_types.edit')->with('commentType', $commentType);
    }

    /**
     * Update the specified CommentType in storage.
     *
     * @param int $id
     * @param UpdateCommentTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommentTypeRequest $request)
    {
        $commentType = $this->commentTypeRepository->find($id);

        if (empty($commentType)) {
            Flash::error('Comment Type not found');

            return redirect(route('commentTypes.index'));
        }

        $commentType = $this->commentTypeRepository->update($request->all(), $id);

        Flash::success('Comment Type updated successfully.');

        return redirect(route('commentTypes.index'));
    }

    /**
     * Remove the specified CommentType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $commentType = $this->commentTypeRepository->find($id);

        if (empty($commentType)) {
            Flash::error('Comment Type not found');

            return redirect(route('commentTypes.index'));
        }

        $this->commentTypeRepository->delete($id);

        Flash::success('Comment Type deleted successfully.');

        return redirect(route('commentTypes.index'));
    }
}
