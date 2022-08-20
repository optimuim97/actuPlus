<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Entity;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laracasts\Flash\Flash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function loginEntity(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $entity = Entity::whereEmail($email)->first();

        $passwordStored = $entity != null ? $entity->password : '';

        if (!empty($entity)) {
            Auth::loginUsingId($entity->id);
        } else {
            dd('Is empty');
        }

        if (Hash::check($password, $passwordStored)) {
            Flash::success('Bien éffectué !');
            return redirect('home');
        } else {
            Flash::error('Les identifiants ne correspondent pas a nos enregistrements.');
            return back();
        }
    }
}
