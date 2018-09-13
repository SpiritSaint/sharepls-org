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
     * @return \Illuminate\Http\Response
     */
    public function index(IndexRequest $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Image $image)
    {
        //
    }
}
