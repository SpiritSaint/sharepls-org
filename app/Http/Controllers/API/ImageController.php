<?php

namespace App\Http\Controllers\API;

use App\Models\Image;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Image\IndexRequest;
use App\Http\Requests\API\Image\StoreRequest;
use App\Http\Requests\API\Image\ShowRequest;
use App\Http\Requests\API\Image\UpdateRequest;
use App\Http\Requests\API\Image\DestroyRequest;

class ImageController extends Controller
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
     * @param  \App\Models\Image $image
     * @return void
     */
    public function show(ShowRequest $request, Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param  \App\Models\Image $image
     * @return void
     */
    public function update(UpdateRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRequest $request
     * @param  \App\Models\Image $image
     * @return void
     */
    public function destroy(DestroyRequest $request, Image $image)
    {
        //
    }
}
