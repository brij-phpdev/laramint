<?php

namespace App\Jobs;

use App\Mail\SendDailyAttendance;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


class SendDailyAttendanceEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $details = [
            'title' => 'Thank you for subscribing to my newsletter',
            'body' => 'You will receive a newsletter every Fourth Friday of the month'

        ];
        try{
            echo "\r\nkadsasd";
            Mail::to('brij.phpdev@gmail.com')->send(new SendDailyAttendance($details));
            echo "\r\naqwewewe";
        } catch (Exception $ex) {
              echo 'Error Message: ' .$ex->getMessage();
        }
    }
}
