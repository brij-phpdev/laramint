<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\StudentDashboardNotification::factory()
                ->create([
            'notification_title' => 'Kindly reach 10 minutes before',
            'notification_description' => 'It is highly recommended to every student that they should reach 10 minutes early',
            'notification_start_date' => date('Y-m-d H:i:s'),
            'notification_end_date' => date('Y-m-t H:i:s'),
            'notification_created_by' => 1,
        ]);
        \App\Models\StudentDashboardNotification::factory()
                ->create([
            'notification_title' => 'Kindly pay your due fees before 10th of this month',
            'notification_description' => 'Make sure to pay your fees on time to avoid fine',
            'notification_start_date' => date('Y-m-d H:i:s'),
            'notification_end_date' => date('Y-m-t H:i:s'),
                    'notification_created_by' => 1,
        ]);
    }
}
