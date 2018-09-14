<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Category\IndexRequest;
use App\Http\Requests\API\Category\StoreRequest;
use App\Http\Requests\API\Category\ShowRequest;
use App\Http\Requests\API\Category\UpdateRequest;
use App\Http\Requests\API\Category\DestroyRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param IndexRequest $request
     * @return void
     */
    public function index(IndexRequest $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return void
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ShowRequest $request
     * @param  \App\Models\Category $category
     * @return void
     */
    public function show(ShowRequest $request, Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest $request
     * @param  \App\Models\Category $category
     * @return void
     */
    public function update(UpdateRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyRequest $request
     * @param  \App\Models\Category $category
     * @return void
     */
    public function destroy(DestroyRequest $request, Category $category)
    {
        //
    }
}
