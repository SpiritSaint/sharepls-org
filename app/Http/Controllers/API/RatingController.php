<?php

namespace App\Http\Controllers\API;

use App\Models\Rating;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Rating\IndexRequest;
use App\Http\Requests\API\Rating\StoreRequest;
use App\Http\Requests\API\Rating\ShowRequest;
use App\Http\Requests\API\Rating\UpdateRequest;
use App\Http\Requests\API\Rating\DestroyRequest;

class RatingController extends Controller
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
     * @param  \App\Models\Rating $rating
     * @return void
     */
    public function show(ShowRequest $request, Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param  \App\Models\Rating $rating
     * @return void
     */
    public function update(UpdateRequest $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRequest $request
     * @param  \App\Models\Rating $rating
     * @return void
     */
    public function destroy(DestroyRequest $request, Rating $rating)
    {
        //
    }
}
