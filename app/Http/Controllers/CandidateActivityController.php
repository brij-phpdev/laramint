<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidateActivityRequest;
use App\Http\Requests\UpdateCandidateActivityRequest;
use App\Models\CandidateActivity;

class CandidateActivityController extends Controller
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
     * @param  \App\Http\Requests\StoreCandidateActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCandidateActivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CandidateActivity  $candidateActivity
     * @return \Illuminate\Http\Response
     */
    public function show(CandidateActivity $candidateActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CandidateActivity  $candidateActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(CandidateActivity $candidateActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCandidateActivityRequest  $request
     * @param  \App\Models\CandidateActivity  $candidateActivity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCandidateActivityRequest $request, CandidateActivity $candidateActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CandidateActivity  $candidateActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(CandidateActivity $candidateActivity)
    {
        //
    }
}
