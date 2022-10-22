<?php

namespace App\Http\Controllers;

use App\Models\PodCast;
use App\Http\Requests\StorePodCastRequest;
use App\Http\Requests\UpdatePodCastRequest;
use App\Http\Resources\PodCast as PodCastResource;

class PodCastController extends Controller
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
     * @param  \App\Http\Requests\StorePodCastRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePodCastRequest $request)
    {
        $pc                = new PodCast;
        $pc->name          = $request->name;
        $pc->description   = $request->description;
        $pc->marketing_url = $request->marketing_url;
        $pc->feed_url      = $request->feed_url;
		$pc->save();

        return new PodCastResource($pc);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PodCast  $podCast
     * @return \Illuminate\Http\Response
     */
    public function show(PodCast $podCast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PodCast  $podCast
     * @return \Illuminate\Http\Response
     */
    public function edit(PodCast $podCast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePodCastRequest  $request
     * @param  \App\Models\PodCast  $podCast
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePodCastRequest $request, PodCast $podCast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PodCast  $podCast
     * @return \Illuminate\Http\Response
     */
    public function destroy(PodCast $podCast)
    {
        //
    }
}
