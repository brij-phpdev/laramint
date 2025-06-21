<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentDashboardNotificationRequest;
use App\Http\Requests\UpdateStudentDashboardNotificationRequest;
use App\Models\StudentDashboardNotification;

class StudentDashboardNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $this->authorize('admin_student_notification.index');
        $stu_dash_notifications = StudentDashboardNotification::paginate();
        return view("contents.admin.student_dash_notification.index", compact("stu_dash_notifications"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin_student_notification.create');
        return view("contents.admin.student_dash_notification.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentDashboardNotificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentDashboardNotificationRequest $request)
    {
        $this->authorize('admin_student_notification.create');
        $post = $request->all();
        print_r($post);
        die;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentDashboardNotification  $studentDashboardNotification
     * @return \Illuminate\Http\Response
     */
    public function show($studentDashboardNotification)
    {
        //
        $stu_notification = StudentDashboardNotification::where('id',$studentDashboardNotification)->first();
//        print_r($stu_notification);die;
        return view("contents.admin.student_dash_notification.show", compact("stu_notification"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentDashboardNotification  $studentDashboardNotification
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentDashboardNotification $studentDashboardNotification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentDashboardNotificationRequest  $request
     * @param  \App\Models\StudentDashboardNotification  $studentDashboardNotification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentDashboardNotificationRequest $request, StudentDashboardNotification $studentDashboardNotification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentDashboardNotification  $studentDashboardNotification
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentDashboardNotification $studentDashboardNotification)
    {
        //
    }
}
