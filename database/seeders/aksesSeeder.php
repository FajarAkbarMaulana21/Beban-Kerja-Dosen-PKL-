<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class aksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->username = 'Admin';
        $user->email = 'Admin@gmail.com';
        $user->level = 'Admin';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');

        $user->save();
    }
}
