<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ExecuteQueueWork extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'execute:queuework';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executes the queue:work command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting queue work...');

        // Call the queue:work Artisan command
        Artisan::call('queue:work --stop-when-empty');

        $this->info('Queue work completed.');

        return 0;
    }
}

