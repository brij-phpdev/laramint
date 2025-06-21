<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StudentDashboardNotification as SDNotification;

class StudentDashboardNotification extends Component
{
    public $stu_dash_notifications;

    public function mount(): void
    {
        $this->getStudentDashboardNotification();
    }
    
    public function getStudentDashboardNotification() : void
    {
        $this->stu_dash_notifications = SDNotification::where('status',1)->orderBy('notification_end_date','desc')->get();
    }
    
    public function render()
    {
        return view('livewire.student-dashboard-notification');
    }
}
