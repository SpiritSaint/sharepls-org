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
     * @param  \App\Models\Report $report
     * @return void
     */
    public function show(ShowRequest $request, Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param  \App\Models\Report $report
     * @return void
     */
    public function update(UpdateRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRequest $request
     * @param  \App\Models\Report $report
     * @return void
     */
    public function destroy(DestroyRequest $request, Report $report)
    {
        //
    }
}
