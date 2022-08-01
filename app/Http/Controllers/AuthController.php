<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Imgur;

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


        return response()->json([
                'status'=> true,
                'data' => $user,
                'token' => $user->createToken('secret')->plainTextToken,
                'status_code' => 200
        ]);
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
            
            $user=auth()->user();

            return response()->json([
                    'status'=> true,
                    'data' => $user,
                    'token' => $user->createToken('secret')->plainTextToken,
                    'status_code' => 200
                ]
            );
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

    public function update(Request $request){
        $input = $request->all();

        $user = auth('sanctum')->user();

        if(empty($user)){
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'Une erreur est survenue',
                "status_code" => 404
            ]);
        }

        if ($request->file('image')) {
            $image = $request->file('image');
            
            if ($image != null) {
                $productImage = Imgur::upload($image);
                $user_image_link = $productImage->link();
            }

        } else {
            $user_image_link = '';
        }

        $input['image'] = $user_image_link;


        $user->update($input);

        return response()->json([
            "status" => true,
            "data" => $user,
            "status_code"=> 200
        ]);
    }
}
