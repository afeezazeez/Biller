<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    private $userData = [];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Factory(10000)->create();
    }



}
