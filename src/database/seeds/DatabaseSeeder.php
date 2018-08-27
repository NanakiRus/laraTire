<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             AdminUserTableSeeder::class,
             AdminRolesTableSeeder::class,
             AdminPermissionsTableSeeder::class,
             AdminMenuTableSeeder::class,
             AdminExtAdd::class,
             DiaSizeTableSeeder::class
         ]);
    }
}
