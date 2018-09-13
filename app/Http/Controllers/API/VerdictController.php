<?php

namespace App\Http\Controllers\API;

use App\Models\Verdict;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Verdict\IndexRequest;
use App\Http\Requests\API\Verdict\StoreRequest;
use App\Http\Requests\API\Verdict\ShowRequest;
use App\Http\Requests\API\Verdict\UpdateRequest;
use App\Http\Requests\API\Verdict\DestroyRequest;

class VerdictController extends Controller
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
     * @param  \App\Models\Verdict  $veredict
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Verdict $veredict)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Verdict  $veredict
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Verdict $veredict)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verdict  $veredict
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Verdict $veredict)
    {
        //
    }
}
