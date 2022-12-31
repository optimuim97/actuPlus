<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Entity;
use App\Models\Post;
use Illuminate\Http\Request;
use Flash;
use Response;
use Imgur;
use \Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends AppBaseController
{
    /** @var  PostRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    /**
     * Display a listing of the Post.
     *
     * @return Response
     */
    public function index()
    {
        if(Auth::user() != null & Auth::user()->user_type == 'entity'){
            $user = Auth::user();
            $entity = Entity::where('email', $user->email)->first();
            $posts = Post::where('entity_id', $entity->id)->orderBy('created_at', 'DESC')->get();
        }else{
            $posts = Post::orderBy('created_at', 'DESC')->get();
        }
    
        return view('posts.index')
            ->with(['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {

        $entities = Entity::all();

        return view('posts.create', compact('entities'));
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $input = $request->all();

        if ($request->file('cover')) {
            $image = $request->file('cover');
            $pictures = [];
            if ($image != null) {
                // dd($image);
                $productImage = Imgur::upload($image);
                $productImageLink = $productImage->link();
            }

        } else {
            $productImageLink = 'https://i.imgur.com/9DbfmJM.jpg';
        }
        
        $input["cover"] = $productImageLink;
        $input["user_id"] = auth()->user()->id;

        $post = $this->postRepository->create($input);

        Flash::success('Post saved successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {

        Carbon::setLocale('fr');
        $post = $this->postRepository->find($id);


        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.edit')->with(['post'=>$post, 'entities'=> Entity::all()]);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param int $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $post = $this->postRepository->update($request->all(), $id);

        Flash::success('Post updated successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $this->postRepository->delete($id);

        Flash::success('Post deleted successfully.');

        return redirect(route('posts.index'));
    }

}
