<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\UsersResource;

class AuthController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'username'    => 'required',
                'password' => 'required|string|min:6',
            ]
        );
 
        if($validator->fails()){
            Log::error($validator->errors());
            return $this->sendError('validation error.', $validator->errors());       
        }

        $token_validity = (24 * 60);

        $this->guard()->factory()->setTTL($token_validity);  
        if (!$token = $this->guard()->attempt($validator->validated())) {
            Log::error('There was an error logging in. Please try again.');
            return $this->sendError('There was an error logging in. Please try again.');    
        }

        Log::info('Login success');
        return $this->respondWithToken($token);
    }

    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'    => 'required|string',
                'phone'    => 'required|string',
                'email'    => 'required|email|unique:users',
                'password' => 'required|string|min:6',
                'username'    => 'required|string',
                'company'    => 'required|string',
                'nationality'    => 'required|string',
            ]
        );

        if($validator->fails()){
            Log::error($validator->errors());
            return $this->sendError('validation error.', $validator->errors());       
        }

        $user = new User();
        $user->name        = $request->name;
        $user->phone       = $request->phone;
        $user->email       = $request->email;
        $user->password    = Hash::make($request->password);
        $user->username    = $request->username;
        $user->company     = $request->company;
        $user->nationality = $request->nationality;
        $user->save();

        if ($user) {
            Log::info('Register success');
            return $this->sendResponse(new UsersResource($user), 'Register success.'); 
        }
    }
 
    public function logout()
    {
        auth()->logout();
        Log::info('Successfully logged out');
        return $this->sendResponse([], 'Successfully logged out.');  
    } 

    public function refresh()
    {
        Log::info('refresh token');
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    { 
        return $this->sendResponse([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ], 'Successfully logged out.');   
    }

    protected function guard()
    {
        return Auth::guard();
    }
}


