<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Accounts;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['authenticate']]);
    }

    //Pokaż profil użytkownika
    public function profil(Request $request) {
        $user = JWTAuth::toUser()->authenticate();
        $profil = Accounts::where('id', $user->id)->lists('firstname', 'lastname', 'email', 'created_at');
        return response(json($profil));
    }

    //zmiana hasła
    public function update(Request $request) {
        $user = JWTAuth::parseToken()->authenticate();
        $account = Accounts::where('id', $user->id)->first();
        if($account) {
            $accountPass = json_encode($account->password);
            $oldPass = bcrypt($request->input('oldPass'));
            $newPass = $request->input('newPass');
            $newPass1 = $request->input('newPass1');
            echo $account->password.' - ';
            echo $oldPass.' - ';
            if (Hash::check($oldPass, $user->password))
            {
                echo $oldPass.' - ';
            }

            echo $newPass.' - ';
            echo $newPass1;
//            if($accountPass == $oldPass) {
//                if($newPass == $newPass1) {
//                    $account->password = Hash::make($newPass);
//                    $account->save();
//                    return response()->json('Hasło zostało zmienione.');
//                } else {
//                    return response('Nowe hasła nie pasują do siebie');
//                }
//            } else {
//                return response('Błędne bieżące hasło', 403);
//            }

        }
    }
}
