<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'username' => 'required | string',
            'first_name' => 'required | string',
            'last_name' => 'required | string',
            'email' => 'required | string | unique:users,email',
            'address' => 'required | string',
            'password' => 'requred | string | confirmed',

        ]);
        
        $user = User::create([
            'username' => $fields['username'],
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'email' => $fields['email'],
            'address' => $fields['address'],
            'password' => bcrypt($fields['password']),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        // $response = 
    }
}
