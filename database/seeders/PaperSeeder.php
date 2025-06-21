<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        # 1
        \App\Models\Paper::factory()->create([
            'code' => 'M1-R5',
            'name' => 'Information Technology Tools and Network Basics',
            'description' => 'Information Technology Tools and Network Basics',
            'image' => 'file.png',
            'is_published' => true,
            'department_id' => 1,
            'course_id' => 1
        ]);
        
        # 2
        \App\Models\Paper::factory()->create([
            'code' => 'M2-R5',
            'name' => 'Web Designing & Publishing',
            'description' => 'Web Designing & Publishing',
            'image' => 'file.png',
            'is_published' => true,
            'department_id' => 1,
            'course_id' => 1
        ]);
    }
}
