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
     * @param  \App\Models\Role $role
     * @return void
     */
    public function show(ShowRequest $request, Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param  \App\Models\Role $role
     * @return void
     */
    public function update(UpdateRequest $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRequest $request
     * @param  \App\Models\Role $role
     * @return void
     */
    public function destroy(DestroyRequest $request, Role $role)
    {
        //
    }
}
