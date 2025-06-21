<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentNotificationRequest;
use App\Http\Requests\UpdateStudentNotificationRequest;
use App\Models\StudentNotification;

class StudentNotificationController extends Controller
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
     * @param  \App\Http\Requests\StoreStudentNotificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentNotificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentNotification  $studentNotification
     * @return \Illuminate\Http\Response
     */
    public function show(StudentNotification $studentNotification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentNotification  $studentNotification
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentNotification $studentNotification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentNotificationRequest  $request
     * @param  \App\Models\StudentNotification  $studentNotification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentNotificationRequest $request, StudentNotification $studentNotification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentNotification  $studentNotification
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentNotification $studentNotification)
    {
        //
    }
}
