<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FreshDatabaseSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fresh:kuy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop All Table and Seeder Run';

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
        $this->call('migrate:fresh');
        $this->call('db:seed');
        $this->info('command success!');
    }
}
