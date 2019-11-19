<?php

namespace App\Observers;

use App\User;
use Faker\Factory;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function creating(User $user)
    {
        $faker = Factory::create();
        $user['address'] = $faker->address;
        $user['country'] = $faker->country;
        $user['trading_account_number'] = $faker->bankAccountNumber;
        $user['balance'] = $faker->randomNumber(5);
        $user['open_trades'] = $faker->randomNumber(2);
        $user['close_trades'] = $faker->randomNumber(1);
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
