<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Imgur;
class AuthController extends Controller
{
    public function register(Request $request)
    {
        $attrs = $request->validate([
            "name" => 'required|string',
            "email" => 'required|email|unique:users',
            "password" => 'required|min:7|confirmed',
        ]);

        $user_ = User::create([
            'name' => $attrs["name"],
            'email' => $attrs["email"],
            'password' => bcrypt($attrs["password"]),
        ]);

        $user = [$user_];
        $token = ($user)[0]->createToken('secret')->plainTextToken;
        $data = [];

        foreach ($user as $user) {
            $data = [
                'id' => $user->id,
                'name' => $user->name,
                "email"=> $user->email,
                "image"=> $user->image,
                "email_verified_at"=> null,
                'token'=> $token,
                "created_at"=> $user->created_at,
                "updated_at"=>$user->updated_at
            ];
        }

        return response()->json([
            'status'=> true,
            'data' => $data,
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
            $user = [auth()->user()];
            $token = ($user)[0]->createToken('secret')->plainTextToken;
            $data = [];

            foreach ($user as $user) {
                $data = [
                    'id' => $user->id,
                    'name' => $user->name,
                    "email"=> $user->email,
                    "image"=> $user->image,
                    "email_verified_at"=> null,
                    'token'=> $token,
                    "created_at"=> $user->created_at,
                    "updated_at"=>$user->updated_at
                ];
            }

            return response()->json([
                    'status'=> true,
                    'data' =>$data,
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
                $productImageLink = $productImage->link();
            }

        } else {
            $productImageLink = '';
        }

        $input["image"] = $productImageLink;

        $user->update($input);

        return response()->json([
            "status" => true,
            "data" => $user,
            "message"=>"Mise à jour éffectué", 
            "status_code"=> 200
        ]);
    }
}
