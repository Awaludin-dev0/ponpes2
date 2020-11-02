<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Firebase\JWT\JWT;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email);
        $user_password = $user->first()->password;
        if ($user->exists()) {
            if (Hash::check($password, $user_password)) {
                $key = env('APP_KEY', '7*(@(*#@(*#(@*))))');
                $time = time();
                $nbf = $time + 3600;
                $payload = [
                    "iss" => "ponpesalislamiyahsambas.id",
                    "aud" => "ponpesalislamiyahsambas.id",
                    "iat" => $time,
                    "nbf" => $nbf
                ];

                $auth_token = JWT::encode($payload, $key);

                return \Response::json([
                    'name' => $user->first()->name,
                    'auth_token' => $auth_token,
                    'expired_at' => $nbf
                ]);
            } else {
                // not exists
                return \Response::json(['status'=>'not exists']);
            }
        }
    }
}
