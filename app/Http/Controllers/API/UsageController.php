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
     * @param  \App\Models\Usage $usage
     * @return void
     */
    public function show(ShowRequest $request, Usage $usage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param  \App\Models\Usage $usage
     * @return void
     */
    public function update(UpdateRequest $request, Usage $usage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRequest $request
     * @param  \App\Models\Usage $usage
     * @return void
     */
    public function destroy(DestroyRequest $request, Usage $usage)
    {
        //
    }
}
