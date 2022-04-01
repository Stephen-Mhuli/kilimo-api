<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
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
            'password' => 'required | string | confirmed'

        ]);

        $user = User::create([
            'username' => $fields['username'],
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'email' => $fields['email'],
            'address' => $fields['address'],
            'password' => Hash::make($fields['password']),
        ]);

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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken($request->device_name)->plainTextToken;
    }

    //Logout function
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return ['message' => 'you are logged out'];
    }
}
