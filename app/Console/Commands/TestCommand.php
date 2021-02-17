<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'myClear:clear';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = ' it Is My Custom Command to Clear View Cash';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        

        Artisan::call('view:cache ');
        Artisan::call(' view:clear');
    }
}
