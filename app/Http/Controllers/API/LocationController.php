<?php

namespace App\Http\Controllers\API;

use App\Models\Location;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Location\IndexRequest;
use App\Http\Requests\API\Location\StoreRequest;
use App\Http\Requests\API\Location\ShowRequest;
use App\Http\Requests\API\Location\UpdateRequest;
use App\Http\Requests\API\Location\DestroyRequest;

class LocationController extends Controller
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
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Location $location)
    {
        //
    }
}
