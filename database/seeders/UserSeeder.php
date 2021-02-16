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
        $providers=['paystack','flutterwave','stripe'];

        for ($i=1; $i < 10001; $i++) {
            $userData[] = [
                'email'=> Str::random(10).'@gmail.com',
                'billing_amount'=>rand(500.00, 20000.0),
                'billing_provider'=>$providers[array_rand($providers)],
               ];
        }

        foreach ($userData as $user) {
            User::insert($user);
        }
    }



}
