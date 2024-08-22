<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Harley Lumagui',
            'email' => 'developer@ind.claims',
            'password' => bcrypt('hArlxpw0723')
        ]);

        User::create([
            'name' => 'April Benosa',
            'email' => 'administrator@ind.claims',
            'password' => bcrypt('#administrator2023!')
        ]);
    }
}
