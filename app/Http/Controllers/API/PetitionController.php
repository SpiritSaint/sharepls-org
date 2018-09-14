<?php

namespace App\Http\Controllers\API;

use App\Models\Petition;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Petition\IndexRequest;
use App\Http\Requests\API\Petition\StoreRequest;
use App\Http\Requests\API\Petition\ShowRequest;
use App\Http\Requests\API\Petition\UpdateRequest;
use App\Http\Requests\API\Petition\DestroyRequest;

class PetitionController extends Controller
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
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Petition $petition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Petition $petition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Petition $petition)
    {
        //
    }
}
