<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(KaryawanSeeder::class);
        $this->call(StudioSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TransaksiSeeder::class);

    }
}
