<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(Post $post, UpdateRequest $request)
    {
        $data = $request->validated();

        $post->update($data);

        $post = $post->fresh();

        return new PostResource($post);
//        return redirect()->route('post.show',$post->id);
    }
}
