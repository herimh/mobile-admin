<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function token(){
        return ['token' => csrf_token()];
    }

    public function login(Request $request){
        $email = $request->get('email');
        $password = $request->get('password');

        $user = User::where('email', $email)->first();
        if($user){
            if(Hash::check($password, $user->password)){
                $apiToken = bcrypt(date('YmdHis'));
                $user->api_token = $apiToken;
                $user->save();

                return $user->toJson();
            }
        }

        return ['failed' => true];
    }

    public function loginByToken(Request $request){
        $email = $request->get('email');
        $apiToken = $request->get('api_token');

        $user = User::where('email', $email)->first();
        if($user && $user->api_token == $apiToken){
            return $user->toJson();
        }

        return ['failed' => true];
    }
}