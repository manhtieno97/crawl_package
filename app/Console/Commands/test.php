<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $sites = ['NetTruyen'];
        $config = [
            'concurrency' => 1,
            'proxy'       => null,
            'browser'     => 'guzzle',
        ];
        $reset = false; //reset queue
        app(\App\Crawler\Crawler::class)->run($sites, $config, $reset);
    }
}
