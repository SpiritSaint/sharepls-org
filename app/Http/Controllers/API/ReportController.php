<?php

namespace App\Http\Controllers\API;

use App\Models\Report;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Report\IndexRequest;
use App\Http\Requests\API\Report\ShowRequest;
use App\Http\Requests\API\Report\StoreRequest;
use App\Http\Requests\API\Report\UpdateRequest;
use App\Http\Requests\API\Report\DestroyRequest;

class ReportController extends Controller
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
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Report $report)
    {
        //
    }
}
