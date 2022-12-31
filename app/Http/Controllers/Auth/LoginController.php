<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Entity;
use App\Models\User;
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

        // dd($request->all());
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();

        // dd($user);

        if (empty($user)) {
            redirect('/');
        }

        if (!empty($user)) {

            $passwordStored = $user->password;

            if (Hash::check($password, $passwordStored)) {
                Flash::success('Bien éffectué !');
                return redirect('home');
            } else {
                Flash::error('Les identifiants ne correspondent pas a nos enregistrements.');
                return redirect('/');
            }

            Auth::loginUsingId($user->id);
        } else {
            Flash::success('Une erreur est survenue');
            return back();
        }

       
    }
}
