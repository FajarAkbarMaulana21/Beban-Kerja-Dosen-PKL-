<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(PenunjangSeeder::class);
        $this->call(PenelitianSeeder::class);
        $this->call(aksesSeeder::class);
        $this->call(Sub_Kegiatan::class);
        $this->call(Sub_Penelitian::class);

    }
}
