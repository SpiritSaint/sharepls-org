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
     * @param  \App\Models\Location $location
     * @return void
     */
    public function show(ShowRequest $request, Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param  \App\Models\Location $location
     * @return void
     */
    public function update(UpdateRequest $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRequest $request
     * @param  \App\Models\Location $location
     * @return void
     */
    public function destroy(DestroyRequest $request, Location $location)
    {
        //
    }
}
