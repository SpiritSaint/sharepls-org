<?php

namespace App\Http\Controllers\API;

use App\Models\Veredict;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Veredict\IndexRequest;
use App\Http\Requests\API\Veredict\StoreRequest;
use App\Http\Requests\API\Veredict\ShowRequest;
use App\Http\Requests\API\Veredict\UpdateRequest;
use App\Http\Requests\API\Veredict\DestroyRequest;

class VeredictController extends Controller
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
     * @param  \App\Models\Veredict  $veredict
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Veredict $veredict)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Veredict  $veredict
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Veredict $veredict)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Veredict  $veredict
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Veredict $veredict)
    {
        //
    }
}
