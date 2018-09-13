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
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Rating $rating)
    {
        //
    }
}
