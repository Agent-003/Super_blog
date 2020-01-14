<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Traits\DeletableTrait;
use App\Sevices\PostServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use DeletableTrait;

    private $postService;

    public function __construct(\App\Services\PostServiceInterface $postService)
    {
        $this->postService=$postService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=$this->postService->getCategories();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();
        $this->postService->createCategory($attributes);
        return response()->redirectToRoute('list_categories');
    }

    /**
     * Display the category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=$this->postService->getCategory($id);

        if(!$category) {
            abort(404);
        }
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->postService->getCategory($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributes = $request->all();
        $this->postService->editCategory($attributes);
        return response()->redirectToRoute('list_categories');
    }

    /**
     * Remove the category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=$this->postService->getCategories($id);

        $category=$this->delete($category);

        $category->save();

        return back();

    }
}
