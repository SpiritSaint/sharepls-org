<?php

namespace App\Http\Controllers\API;

use App\Models\Resource;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Resource\IndexRequest;
use App\Http\Requests\API\Resource\StoreRequest;
use App\Http\Requests\API\Resource\ShowRequest;
use App\Http\Requests\API\Resource\UpdateRequest;
use App\Http\Requests\API\Resource\DestroyRequest;

class ResourceController extends Controller
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
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Resource $resource)
    {
        //
    }
}
