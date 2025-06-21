<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ActivityCategories;

class ActivityCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            #1
            ActivityCategories::factory()->create([
                'activity_type'=>1,
                'activity_title'=>'CandidateRegistration',
                'activity_description'=>'Candidate has successfully registered on the website',
            ]);
            
            #2
            ActivityCategories::factory()->create([
                'activity_type'=>2,
                'activity_title'=>'CandidateProfileVerification',
                'activity_description'=>'Candidate has successfully verified profile on the website',
            ]);
            
            #3
            ActivityCategories::factory()->create([
                'activity_type'=>3,
                'activity_title'=>'CandidateLogin',
                'activity_description'=>'Candidate has successfully logged in',
            ]);
            
            #4
            ActivityCategories::factory()->create([
                'activity_type'=>4,
                'activity_title'=>'CandidateDocumentUpload',
                'activity_description'=>'Candidate has successfully uploaded document(s)',
            ]);
            
            #5
            ActivityCategories::factory()->create([
                'activity_type'=>5,
                'activity_title'=>'CandidateAttendedCoaching',
                'activity_description'=>'Candidate has attended class',
            ]);
            
            #6
            ActivityCategories::factory()->create([
                'activity_type'=>6,
                'activity_title'=>'CandidateAttendedCoachingLate',
                'activity_description'=>'Candidate has joined its class late',
            ]);
            
            #7
            ActivityCategories::factory()->create([
                'activity_type'=>7,
                'activity_title'=>'CandidateMissedCoaching',
                'activity_description'=>'Candidate has missed its class today',
            ]);
            
            #8
            ActivityCategories::factory()->create([
                'activity_type'=>8,
                'activity_title'=>'CandidateTakenQuiz',
                'activity_description'=>'Candidate has successfully taken Quiz',
            ]);
            
            #9
            ActivityCategories::factory()->create([
                'activity_type'=>9,
                'activity_title'=>'CandidateFailedToTakeQuiz',
                'activity_description'=>'Candidate has failed to take Quiz',
            ]);
            
            #10
            ActivityCategories::factory()->create([
                'activity_type'=>10,
                'activity_title'=>'CandidatePassedQuiz',
                'activity_description'=>'Candidate has passed the taken Quiz',
            ]);
            
            #11
            ActivityCategories::factory()->create([
                'activity_type'=>11,
                'activity_title'=>'CandidateFailedQuiz',
                'activity_description'=>'Candidate has failed in the Quiz',
            ]);

            #12
            ActivityCategories::factory()->create([
                'activity_type'=>12,
                'activity_title'=>'CandidateFilledFeedback',
                'activity_description'=>'Candidate has filled feedback form',
            ]);
            
    }
}
