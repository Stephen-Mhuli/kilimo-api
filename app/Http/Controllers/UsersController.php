<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\HasApiTokens;

class UserController extends Controller
{
    use HasApiTokens;

    public function register(Request $request)
    {
        $fields = $request->validate([
            'username' => 'required | string',
            'first_name' => 'required | string',
            'last_name' => 'required | string',
            'email' => 'required | email | string | unique:users,email',
            'address' => 'required | string',
            'password' => 'required | string | confirmed',
            'role_id' => 'required'

        ]);

        $user = User::create([
            'username' => $fields['username'],
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'email' => $fields['email'],
            'address' => $fields['address'],
            'password' => Hash::make($fields['password']),
            'address' => $fields['address']
        ]);
        $user->attachRole($request->role_id);
        $token = $user->createToken('kilimoapitoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }


    //Login function
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required | email | string',
            'password' => 'required | string | min:8',
        ]);

        $user = User::where('email', $fields['email'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return Response(['message' => 'Invalid Credentials'], 401);
        } else {
            $token = $user->createToken('kilimoapitoken')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token
            ];
        }
        return response($response, 200);
    }

    //Logout function
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return Response([
            'message' => 'Logged Out Successfully'
        ]);
    }
}
