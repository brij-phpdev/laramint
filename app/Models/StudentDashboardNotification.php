<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDashboardNotification extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['notification_title', 'notification_description', 'notification_created_by', 'created_for', 
        'notification_start_date', 'notification_end_date', 'notification_priority', 'status'
        ];
}
