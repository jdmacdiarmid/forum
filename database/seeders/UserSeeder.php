<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'              => 'Admin',
            'email'             => 'admin@example.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('password'), // password
            'remember_token'    => Str::random(10),
            'type'              => User::ADMIN,
        ]);
        User::factory()->create([
            'name'              => 'John Doe',
            'email'             => 'john@example.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('password'), // password
            'remember_token'    => Str::random(10),
            'type'              => User::DEFAULT,
        ]);

        User::factory(10)->create();
    }
}
