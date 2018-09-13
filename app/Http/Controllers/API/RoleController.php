<?php

namespace App\Http\Controllers\API;

use App\Models\Role;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Role\IndexRequest;
use App\Http\Requests\API\Role\StoreRequest;
use App\Http\Requests\API\Role\ShowRequest;
use App\Http\Requests\API\Role\UpdateRequest;
use App\Http\Requests\API\Role\DestroyRequest;

class RoleController extends Controller
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
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, Role $role)
    {
        //
    }
}
