<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = array(
            "name" => "Ouattara Aboubakar Sidik",
            "email" => "assidikouattara@gmail.com",
            "password" => bcrypt("password"),
        );
        User::create($user);
    }
}
