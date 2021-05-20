<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	/**
	 * @param RegisterRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function register(RegisterRequest $request)
	{
		$user = User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);
		
		$user->assignRole('user');
		
		return response()->json(['msg' => 'Registered Successfully']);
	}
	
	/**
	 * @param LoginRequest $request
	 * @return mixed
	 */
	public function login(LoginRequest $request)
	{
		
		$user = User::where('email', $request->email)->first();
		
		if (!$user || !Hash::check($request->password, $user->password)) {
			throw ValidationException::withMessages([
				'email' => ['The provided credentials are incorrect.'],
			]);
		}
		
		return response()->json(['token' => $user->createToken('auth_token')->plainTextToken]);
		
	}
	
	/**
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function logout(Request $request)
	{
		$request->user()->currentAccessToken()->delete();
		return response()->json(['msg' => 'Logout Successfull']);
	}
}
