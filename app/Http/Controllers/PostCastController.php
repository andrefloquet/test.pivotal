<?php

namespace App\Http\Controllers;

use App\Models\PostCast;
use App\Http\Requests\StorePostCastRequest;
use App\Http\Requests\UpdatePostCastRequest;

class PostCastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostCastRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostCastRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostCast  $postCast
     * @return \Illuminate\Http\Response
     */
    public function show(PostCast $postCast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostCast  $postCast
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCast $postCast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostCastRequest  $request
     * @param  \App\Models\PostCast  $postCast
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostCastRequest $request, PostCast $postCast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostCast  $postCast
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostCast $postCast)
    {
        //
    }
}
