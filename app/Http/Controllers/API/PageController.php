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
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Page $page)
    {
        //
    }
}
