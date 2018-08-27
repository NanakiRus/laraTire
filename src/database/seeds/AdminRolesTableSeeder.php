<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Auth\Database\Administrator;

class AdminRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create([
            'name' => 'Administrator',
            'slug' => 'administrator',
        ]);


        Administrator::first()->roles()->save(Role::first());
    }
}
