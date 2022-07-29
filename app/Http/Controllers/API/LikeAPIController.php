<?php

namespace App\Http\Controllers\API;
use App\Models\Like;
use App\Http\Controllers\AppBaseController;
use App\Models\Post;


/**
 * Class LikeController
 * @package App\Http\Controllers\API
 */

class LikeAPIController extends AppBaseController
{
    public function likeOrUnlike($id)
    {
        $post = Post::find($id);

        if(!$post)
        {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        $like = $post->likes()->where('user_id', auth()->user()->id)->first();

        // if not liked then like
        if(!$like)
        {
            Like::create([
                'post_id' => $id,
                'user_id' => auth()->user()->id
            ]);

            return response([
                'message' => 'Liked'
            ], 200);
        }
        // else dislike it
        $like->delete();

        return response([
            'message' => 'Disliked'
        ], 200);
    }
}
