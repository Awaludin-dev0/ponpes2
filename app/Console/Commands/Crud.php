<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Crud extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:base {model}';

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
        $model = $this->argument('model');
        Artisan::call("make:controller ${model}Controller --api");

        try {
            $output = Artisan::call("make:migration Create${model}Table");
        } catch (\Exception $e) {
            print_r($e->getMessage());
        }
        
        if (! file_exists(app_path("Models/${model}"))) {
            Artisan::call("make:model ${model}");
        }
        return 0;
    }
}
