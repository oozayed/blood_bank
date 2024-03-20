<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Client\LikedPostResource;
use App\Http\Resources\Api\Client\PostResource;
use App\Models\ClientPost;
use App\Models\Post;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use ResponseTrait;

    public function index(Request $request)
    {
        $data = Post::query()
            ->search($request)
            ->with('category')
            ->get();


        return $this->data('This is all posts', PostResource::collection($data));
    }

    public function likePost($id)
    {

        $post = Post::query()->find($id);
        if ($post) {
            $isLiked = ClientPost::query()->where('client_id', auth()->user()->id)->where('post_id', $id)->first();
            if ($isLiked) {
                $isLiked->delete();
                return $this->success('post unliked successfully');
            } else {
                ClientPost::query()->create([
                    'client_id' => auth()->user()->id,
                    'post_id' => $id
                ]);
                return $this->success('post liked successfully');
            }
        } else {
            return $this->error('post not found');
        }
    }
    public function likedPosts(){
        $posts = ClientPost::query()->where('client_id',auth()->user()->id)->get();

        return $this->data('liked posts',LikedPostResource::collection($posts));

    }
}
