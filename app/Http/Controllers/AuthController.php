<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $attrs = $request->validate([
            "name" => 'required|string',
            "email" => 'required|email|unique:users',
            "password" => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $attrs["name"],
            'email' => $attrs["email"],
            'password' => bcrypt($attrs["password"]),
        ]);


        return response(
            [
                'user' => $user,
                'token' => $user->createToken('secret')->plainTextToken
            ]
        );
    } //

    public function login(Request $request)
    {
        $attrs = $request->validate([
            "email" => 'required',
            "password" => 'required|min:6',
        ]);

        
        if (!Auth::attempt(
            [
                'email' => $attrs['email'],
                'password' => $attrs['password']
            ]
        )) {
            return response(["message" => "invalid credentials", 403]);
        }

        if (Auth::attempt(
            [
                'email' => $attrs['email'],
                'password' => $attrs['password']
            ]
        )) {
            return response(["user" => auth()->user(), "token" => auth()->user()->createToken('secret')->plainTextToken, 200]);
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response(
            [
                "message" => "logout success",
                200
            ]
        );
    }
    public function user()
    {

        return response(
            [
                "user" => auth()->user(),
                200
            ]
        );
    }
}
