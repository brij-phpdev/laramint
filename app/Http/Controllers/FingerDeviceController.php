<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFingerDeviceRequest;
use App\Http\Requests\UpdateFingerDeviceRequest;
use App\Models\FingerDevice;

class FingerDeviceController extends Controller
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
     * @param  \App\Http\Requests\StoreFingerDeviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFingerDeviceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FingerDevice  $fingerDevice
     * @return \Illuminate\Http\Response
     */
    public function show(FingerDevice $fingerDevice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FingerDevice  $fingerDevice
     * @return \Illuminate\Http\Response
     */
    public function edit(FingerDevice $fingerDevice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFingerDeviceRequest  $request
     * @param  \App\Models\FingerDevice  $fingerDevice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFingerDeviceRequest $request, FingerDevice $fingerDevice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FingerDevice  $fingerDevice
     * @return \Illuminate\Http\Response
     */
    public function destroy(FingerDevice $fingerDevice)
    {
        //
    }
}
