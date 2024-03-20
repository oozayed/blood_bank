<?php

namespace App\Http\Resources\Api\Client;

use App\Models\Category;
use App\Models\ClientPost;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'image' => $this->image,
            'category'=> $this->category->name,
            'is_liked' => ClientPost::query()->where('client_id', auth()->user()->id)->where('post_id', $this->id)->exists(),
            'num_of_likes' => ClientPost::query()->where('post_id', $this->id)->count()
        ];
    }
}
