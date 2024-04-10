<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'reg_no' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('reg_no', 'password');

        if(Auth::attempt($credentials)){
            /**
             * @var \App\Models\User $user
             */
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'success' => true,
                'data' => [
                    'token' => $token,
                    'user' => $user
                ]
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials'
        ], 422);
    }
}
