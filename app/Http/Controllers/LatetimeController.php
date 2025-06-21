<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLatetimeRequest;
use App\Http\Requests\UpdateLatetimeRequest;
use App\Models\Latetime;

class LatetimeController extends Controller
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
     * @param  \App\Http\Requests\StoreLatetimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLatetimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Latetime  $latetime
     * @return \Illuminate\Http\Response
     */
    public function show(Latetime $latetime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Latetime  $latetime
     * @return \Illuminate\Http\Response
     */
    public function edit(Latetime $latetime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLatetimeRequest  $request
     * @param  \App\Models\Latetime  $latetime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLatetimeRequest $request, Latetime $latetime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Latetime  $latetime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Latetime $latetime)
    {
        //
    }
}
