<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AuthController extends Controller
{
    public function signIn(Request $request)
    {

        try {
            $user = User::whereEmail($request->username)->firstOrFail();
            if ($user){
                return $user->createToken('integration')->plainTextToken;
            }
        }catch (NotFoundHttpException $exception){
            return $exception;
        }
    }
}
