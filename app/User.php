<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'surname',
        'date_of_birth',
        'phone_number',

        'address',
        'country',
        'trading_account_number',
        'balance',
        'open_trades',
        'close_trades',
    ];

    protected $table = 'Clients';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_of_birth',
    ];

    /**
     * @param null $value
     */
    public function setPasswordAttribute($value = null)
    {
        if ($value){
            $this->attributes['password'] = Hash::make($value);
        } else {
            $this->attributes['password'] = Hash::make('secret');
        }
    }

    /**
     * @return |null
     */
    public function getPasswordAttribute()
    {
        return null;
    }
}
