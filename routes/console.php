<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();




schedule::command('user:expiration')->everySecond();

schedule::command('db:backup')->daily();


// protected function schedule(Schedule $schedule)
// {
//    $schedule->command('backup:clean')->daily()->at('01:00');
//    $schedule->command('backup:run')->daily()->at('01:30');
// }
