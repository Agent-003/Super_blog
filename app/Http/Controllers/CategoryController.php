<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Traits\DeletableTrait;
use App\Sevices\PostServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    private $postService;

    public function __construct(PostServiceInterface $postService)
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
        $categories=$this->categories->getCategories();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories=$this->postService->getCategories();
    }

    /**
     * Show the form for editing the category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
