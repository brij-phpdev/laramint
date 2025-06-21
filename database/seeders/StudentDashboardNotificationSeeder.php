<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentDashboardNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #
        \App\Models\Notification::factory()->create([
            'notification_title' => 'O Level',
            'notification_description' => 1,
            'notification_created_by' => 1,
            'notification_start_date' => date('Y-m-d H:i:s'),
            'notification_end_date' => date('Y-m-d H:i:s',"+30 days")
        ]);
    }
}
