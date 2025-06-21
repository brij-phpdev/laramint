<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityCategoriesRequest;
use App\Http\Requests\UpdateActivityCategoriesRequest;
use App\Models\ActivityCategories;

class ActivityCategoriesController extends Controller
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
     * @param  \App\Http\Requests\StoreActivityCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityCategoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActivityCategories  $activityCategories
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityCategories $activityCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActivityCategories  $activityCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivityCategories $activityCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityCategoriesRequest  $request
     * @param  \App\Models\ActivityCategories  $activityCategories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityCategoriesRequest $request, ActivityCategories $activityCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActivityCategories  $activityCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityCategories $activityCategories)
    {
        //
    }
}
