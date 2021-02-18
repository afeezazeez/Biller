<?php

namespace Tests\Unit;

use App\Mail\UserEmail;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;





class BillUser extends TestCase
{

    use DatabaseMigrations;

    public function setUp():void{
        parent::setUp();
        $this->seed('UserSeeder');
    }


    public function test_it_has_billed_user()
    {
        Mail::fake();
        Artisan::call('biller:activator');
        Mail::assertQueued(UserEmail::class, 10000);
    }


}
