<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

//\Illuminate\Support\Facades\Schedule::command('execute:queuework')->everyMinute();
//->withCommands([
//    \App\Console\Commands\ExecuteQueueWork::class,
//])
    \Illuminate\Support\Facades\Schedule::command('execute:queuework')->everyMinute();
//\Illuminate\Support\Facades\Schedule::command('demo:cron')->everyMinute();
