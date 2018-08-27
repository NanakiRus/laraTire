<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class AdminExtAdd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('admin:import', ['extension' => 'helpers']);
        Artisan::call('admin:import', ['extension' => 'log-viewer']);
    }
}
