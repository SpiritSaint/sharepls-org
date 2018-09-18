<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Category\IndexRequest;
use App\Http\Requests\API\Category\StoreRequest;
use App\Http\Requests\API\Category\ShowRequest;
use App\Http\Requests\API\Category\UpdateRequest;
use App\Http\Requests\API\Category\DestroyRequest;

use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\Categories as CategoryCollection;

class CategoryController extends Controller
{
    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        $this->middleware('admin')->only(['store', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param IndexRequest $request
     * @return CategoryCollection
     */
    public function index(IndexRequest $request)
    {
        return new CategoryCollection(Category::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return CategoryResource
     */
    public function store(StoreRequest $request)
    {
        $category = Category::create([
            'slug' => $request->input('slug'),
            'name' => $request->input('name'),
            'caption' => $request->input('caption'),
        ]);

        return new CategoryResource($category);
    }

    /**
     * Display the specified resource.
     *
     * @param ShowRequest $request
     * @param  \App\Models\Category $category
     * @return CategoryResource
     */
    public function show(ShowRequest $request, Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest $request
     * @param  \App\Models\Category $category
     * @return CategoryResource
     */
    public function update(UpdateRequest $request, Category $category)
    {
        $category->update($request->only('name', 'slug', 'caption'));
        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyRequest $request
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(DestroyRequest $request, Category $category)
    {
        $category->delete();
        return response()->json([], 204);
    }
}
