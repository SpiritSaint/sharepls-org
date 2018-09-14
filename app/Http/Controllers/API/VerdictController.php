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
     * @param Verdict $verdict
     * @return void
     */
    public function show(ShowRequest $request, Verdict $verdict)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Verdict $verdict
     * @return void
     */
    public function update(UpdateRequest $request, Verdict $verdict)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRequest $request
     * @param Verdict $verdict
     * @return void
     */
    public function destroy(DestroyRequest $request, Verdict $verdict)
    {
        //
    }
}
