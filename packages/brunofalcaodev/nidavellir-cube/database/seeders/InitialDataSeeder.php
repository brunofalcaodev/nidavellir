<?php

namespace Nidavellir\Database\Seeders;

use Illuminate\Database\Seeder;
use Nidavellir\Cube\Models\User;

class InitialDataSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 users.
        User::factory(10)->create();

        // Create my user.
        $user = User::create([
            'name' => 'Bruno Falcao',
            'email' => 'me@brunofalcao.dev',
            'email_verified_at' => now(),
            'password' => bcrypt('password')
        ]);
    }
}
