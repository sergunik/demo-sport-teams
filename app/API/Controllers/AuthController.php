<?php

namespace App\API\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        $email = request('email', '');
        $pass = request('password', '');

        if( Auth::attempt( ['email' => $email, 'password' => $pass] ) ) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success], Response::HTTP_OK);
        } else{
            return response()->json(['error' =>'Unauthorised'], Response::HTTP_UNAUTHORIZED);
        }
    }
}
