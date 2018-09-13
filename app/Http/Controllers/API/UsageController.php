<?php

namespace App\Http\Controllers\API;

use App\Models\Usage;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Usage\IndexRequest;
use App\Http\Requests\API\Usage\StoreRequest;
use App\Http\Requests\API\Usage\ShowRequest;
use App\Http\Requests\API\Usage\UpdateRequest;
use App\Http\Requests\API\Usage\DestroyRequest;

class UsageController extends Controller
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
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Usage $usage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Usage $usage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Usage $usage)
    {
        //
    }
}
