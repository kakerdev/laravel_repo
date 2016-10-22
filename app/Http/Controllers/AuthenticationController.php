<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Accounts;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('jwt.auth', ['except' => ['authenticate']]);
//    }

    //zaloguj użytkownika
    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');

        try {
            if(!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Błędne login lub hasło'], 401);
            }
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['error' => 'Nie można swtorzyć tokena'], 500);
        }

        //jeżeli dane poprawne wysyłamy w odpowiedzi token użytkownika
        return response()->json(compact('token'));
    }

    //pobierz zalogowanego uzytkownika
    public function getAuthenticatedUser() {
        try {

            if (!$user = JWTAuth::toUser(JWTAuth::getToken())) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        // jeżeli znaleźliśmy usera wysyłamy jego dane
        return response()->json(compact('user'));
    }

    //rejestracja użytkownika
    public function register(Request $request) {
        $newuser = $request->all();//odbieramy dane użytkownika
        $password=Hash::make($request->input('password'));

        $newuser['password'] = $password;
        return Accounts::create($newuser);
    }
    //resetowanie hasla użytkownika
    public function sendPassword(Request $request) {
        //$this->validate($request, ['email' => 'required|email']);
        //znajdujemy usera
        $user = Accounts::where('email',$request->input('email'))->get();
        if($user) {
            Mail::send('emails.welcome', ['user' => $user], function ($m) use ($user) {
                $m->from('repoApp@gmail.com', 'Reset hasla');
                $m->to('kacperdygas@gmail.com')->subject('Reset hasla');
            });
        }
    }
}
