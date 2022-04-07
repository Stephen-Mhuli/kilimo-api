<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\HasApiTokens;


class UsersController extends Controller
{
    use HasApiTokens;


    public function index()
    {
        return User::all();
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required | email | unique',
            'phone_number' => 'required',
            'password' => 'required',
        ]);
        return User::create($request->all());
    }


    public function show($id)
    {
        return User::find($id);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return $user;
    }


    public function destroy($id)
    {
        return User::destroy($id);
    }


    public function search($name)
    {
        return User::where('last_name','like', '%'.$name.'%')->get();
    }
   
}
