<?php

namespace App\Http\Controllers\API;

use App\Models\Page;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Page\IndexRequest;
use App\Http\Requests\API\Page\StoreRequest;
use App\Http\Requests\API\Page\ShowRequest;
use App\Http\Requests\API\Page\UpdateRequest;
use App\Http\Requests\API\Page\DestroyRequest;

class PageController extends Controller
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
     * @param  \App\Models\Page $page
     * @return void
     */
    public function show(ShowRequest $request, Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param  \App\Models\Page $page
     * @return void
     */
    public function update(UpdateRequest $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRequest $request
     * @param  \App\Models\Page $page
     * @return void
     */
    public function destroy(DestroyRequest $request, Page $page)
    {
        //
    }
}
