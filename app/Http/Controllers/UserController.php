<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('create_user');
    }

    /**
     * Store the form.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $userData = Validator::make($request->all(), $this->userService::userValidationRulesShortFrom())->validate();
        $user = $this->userService->createShortFrom($userData);
        return view('create_user', ['user' => $user]);
    }
}
