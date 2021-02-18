<?php

namespace App\Console\Commands;

use App\BillingFactory\BillingProviderFactory;
use App\Mail\UserEmail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class biller extends Command
{
    /**
     * The name and brew install mailhogsignature of the console command.
     *
     * @var string
     */
    protected $signature = 'biller:activator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        User::chunk(500, function($users) {
            foreach ($users as $user) {
                $billing_provider= (new BillingProviderFactory)($user->billing_provider)->billUser();

                $bill= $user->update([
                    'billing_status'=>1,
                    'billed_by'=>$billing_provider
                ]);

                Mail::to($user->email)->queue(new UserEmail());
            }

        });

    }
}
