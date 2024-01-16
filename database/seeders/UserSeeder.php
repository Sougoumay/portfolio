<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Sougouma Ali HAMID',
            'email' => 'elidjaihamid@gmail.com',
            'phone' => '+33 7 74 60 64 72',
            'address' => '1 Rue Clement Marot',
            'city' => 'Orleans',
            'country' => 'France',
            'zip_code' => '45100',
            'title' => 'Développeur Full Stack',
            'description' => 'À la recherche d\'alteranance d \'une année',
            'linkedIn' => "https://www.linkedin.com/in/sougouma-ali-hamid-5b06561a4/",
            'github' => "https://github.com/Sougoumay",
            'mobility' => "France",
            "password" => \Hash::make("password")
        ]);
    }
}
