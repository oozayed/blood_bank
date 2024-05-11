<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Content\PostRequest;
use App\Models\Post;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;


class PostController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:content.posts.index|content.posts.show|content.posts.create|content.posts.store|content.posts.edit|content.posts.update|content.posts.destroy')->only('index', 'show');
        $this->middleware('permission:content.posts.create')->only('create', 'store');
        $this->middleware('permission:content.posts.edit')->only('edit', 'update');
        $this->middleware('permission:content.posts.destroy')->only('destroy');
    }
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category')->paginate(10);

        return view('web.admin.sections.content.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.admin.sections.content.posts.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $request->validated();
        Post::query()->create([
            'title' => $request->title,
            'content' => $request->input('content'),
            'image' => $this->storeImage($request->file('image')),
            'category_id' => $request->category_id,
        ]);

        flash('Post Added Successfully')->success()->important();
        return redirect()->route('admin.content.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::query()->findOrFail($id);

        return view('web.admin.sections.content.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::query()->findOrFail($id);
        return view('web.admin.sections.content.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $request->validated();
        $post = Post::query()->findOrFail($id);
        // method 1
//        $post->image = $request->hasFile('image') ? $this->storeImage($request->file('image'), $post->image) : $post->image;
//        $post->save();
        // method 2
        $post->update([
            'title' => $request->title,
            'content' => $request->input('content'),
            'category_id' => $request->category_id,
            'image' =>  $request->hasFile('image') ? $this->storeImage($request->file('image'), $post->image) : $post->image
        ]);
        flash('Updated Successfully')->success()->important();
        return redirect()->route('admin.content.posts.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::query()->findOrFail($id);
        if (Storage::disk('public')->exists('uploads/' . $post->image)) {
            Storage::disk('public')->delete('uploads/' . $post->image);
        }
        $post->delete();
        flash('Deleted Successfully')->error()->important();
        return redirect()->back();
    }
}
