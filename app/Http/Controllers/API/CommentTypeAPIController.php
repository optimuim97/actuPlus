<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCommentTypeAPIRequest;
use App\Http\Requests\API\UpdateCommentTypeAPIRequest;
use App\Models\CommentType;
use App\Repositories\CommentTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CommentTypeController
 * @package App\Http\Controllers\API
 */

class CommentTypeAPIController extends AppBaseController
{
    /** @var  CommentTypeRepository */
    private $commentTypeRepository;

    public function __construct(CommentTypeRepository $commentTypeRepo)
    {
        $this->commentTypeRepository = $commentTypeRepo;
    }

    /**
     * Display a listing of the CommentType.
     * GET|HEAD /commentTypes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $commentTypes = $this->commentTypeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($commentTypes->toArray(), 'Comment Types retrieved successfully');
    }

    /**
     * Store a newly created CommentType in storage.
     * POST /commentTypes
     *
     * @param CreateCommentTypeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCommentTypeAPIRequest $request)
    {
        $input = $request->all();

        $commentType = $this->commentTypeRepository->create($input);

        return $this->sendResponse($commentType->toArray(), 'Comment Type saved successfully');
    }

    /**
     * Display the specified CommentType.
     * GET|HEAD /commentTypes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var CommentType $commentType */
        $commentType = $this->commentTypeRepository->find($id);

        if (empty($commentType)) {
            return $this->sendError('Comment Type not found');
        }

        return $this->sendResponse($commentType->toArray(), 'Comment Type retrieved successfully');
    }

    /**
     * Update the specified CommentType in storage.
     * PUT/PATCH /commentTypes/{id}
     *
     * @param int $id
     * @param UpdateCommentTypeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommentTypeAPIRequest $request)
    {
        $input = $request->all();

        /** @var CommentType $commentType */
        $commentType = $this->commentTypeRepository->find($id);

        if (empty($commentType)) {
            return $this->sendError('Comment Type not found');
        }

        $commentType = $this->commentTypeRepository->update($input, $id);

        return $this->sendResponse($commentType->toArray(), 'CommentType updated successfully');
    }

    /**
     * Remove the specified CommentType from storage.
     * DELETE /commentTypes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var CommentType $commentType */
        $commentType = $this->commentTypeRepository->find($id);

        if (empty($commentType)) {
            return $this->sendError('Comment Type not found');
        }

        $commentType->delete();

        return $this->sendSuccess('Comment Type deleted successfully');
    }
}
