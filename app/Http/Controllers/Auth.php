<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Auth extends Controller
{

    public function login(AuthRequest $request): JsonResponse
    {

        $user = User::where('username', $request->input('username'))->first();

        return response()->json($user);
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            $token = $existingUser->createToken('authToken')->accessToken;
        } else {
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt('randompassword'),
            ]);

            $token = $newUser->createToken('authToken')->accessToken;
        }

        return redirect('/')->with('token', $token);
    }
}
