<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function create(Request $request): JsonResponse
    {
        $data = $request->all();
        $user = $this->user->create($data);
        return response()->json($user);
    }
}
