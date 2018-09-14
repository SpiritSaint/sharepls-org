<?php

namespace App\Http\Controllers\API;

use App\Models\Comment;
use App\Http\Controllers\Controller;

use App\Http\Requests\API\Comment\IndexRequest;
use App\Http\Requests\API\Comment\StoreRequest;
use App\Http\Requests\API\Comment\ShowRequest;
use App\Http\Requests\API\Comment\UpdateRequest;
use App\Http\Requests\API\Comment\DestroyRequest;

class CommentController extends Controller
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
     * @param  StoreRequest $request
     * @return void
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  ShowRequest $request
     * @param  \App\Models\Comment $comment
     * @return void
     */
    public function show(ShowRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest $request
     * @param  \App\Models\Comment $comment
     * @return void
     */
    public function update(UpdateRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyRequest $request
     * @param  \App\Models\Comment $comment
     * @return void
     */
    public function destroy(DestroyRequest $request, Comment $comment)
    {
        //
    }
}
