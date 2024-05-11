<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Content\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:admin.content.categories.index|admin.content.categories.create|admin.content.categories.store|admin.content.categories.edit|admin.content.categories.update|admin.content.categories.destroy')->only('index');
        $this->middleware('permission:admin.content.categories.create')->only('create', 'store');
        $this->middleware('permission:admin.content.categories.edit')->only('edit', 'update');
        $this->middleware('permission:admin.content.categories.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::withCount('posts')->paginate(10);
        return view('web.admin.sections.content.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.admin.sections.content.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        Category::query()->create($data);
        flash('Added Successfully')->success()->important();
        return to_route('admin.content.categories.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::query()->findOrFail($id);
        return view('web.admin.sections.content.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $data = $request->validated();
        $category = Category::query()->findOrFail($id);
        $category->update($data);
        flash('Updated Successfully')->success()->important();
        return to_route('admin.content.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::query()->findOrFail($id);
        $category->delete();
        flash('Deleted Successfully')->error()->important();
        return redirect()->back();
    }
}
