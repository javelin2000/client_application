<?php

namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public $model;

    /**
     * UserService constructor.
     */
    public function __construct()
    {
        $this->model = new User();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    public function createShortFrom($data)
    {
        $user = factory(User::class)->make();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = '';
        $user->save();
        return $user;
    }

    public static function userValidationRulesShortFrom()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ];
    }
    /**
     * @return array
     */
    public static function userValidationRules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'date_of_birth' => ['required', 'string', "regex:/^([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))$/"],
            'phone_number' => ['required', 'string', ],

        ];
    }

}