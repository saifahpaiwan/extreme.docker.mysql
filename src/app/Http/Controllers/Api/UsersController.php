<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\UsersResource;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\API\BaseController;

class UsersController extends BaseController
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }

    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 5); // จำนวนรายการต่อหน้า (default = 5)
        $keyword = $request->input('keyword', ''); // คีย์เวิร์ดที่ใช้ในการค้นหา (default = '')

        $query = User::query();

        // ตรวจสอบว่ามีคีย์เวิร์ดในการค้นหาหรือไม่
        if ($keyword) {
            $query->where('name', 'like', "%$keyword%")
                ->orWhere('phone', 'like', "%$keyword%")
                ->orWhere('username', 'like', "%$keyword%")
                ->orWhere('email', 'like', "%$keyword%")
                ->orWhere('company', 'like', "%$keyword%")
                ->orWhere('nationality', 'like', "%$keyword%");
        }

        // การแบ่งหน้า Default = 5 รายการ
        $users = $query->paginate($perPage);
        Log::info('Browse user information : '.$users);
        return $this->sendResponse(UsersResource::collection($users), 'users retrieved successfully.');
    }

    public function store(Request $request)
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

        if ($validator->fails()) {
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
        Log::info('create data user success');
        return $this->sendResponse(new UsersResource($user), 'created successfully.');
    }

    public function show($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            Log::error('show users not found.');
            return $this->sendError('users not found.');
        }
        Log::info('Browse user information : '.$user);
        return $this->sendResponse(new usersResource($user), 'users retrieved successfully.');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'    => 'required|string',
                'phone'    => 'required|string',
                'username'    => 'required|string',
                'company'    => 'required|string',
                'nationality'    => 'required|string',
            ]
        );

        if ($validator->fails()) {
            Log::error($validator->errors());
            return $this->sendError('validation error.', $validator->errors());
        }

        $user = User::find($id);
        $user->name        = $request->name;
        $user->phone       = $request->phone;
        $user->username    = $request->username;
        $user->company     = $request->company;
        $user->nationality = $request->nationality;
        $user->save();
        Log::info('update data user success');
        return $this->sendResponse(new UsersResource($user), 'updated successfully.');
    }

    public function destroy($id)
    {
        $user = user::find($id);
        $user->delete();
        Log::info('delete data user success');
        return $this->sendResponse([], 'users deleted successfully.');
    }
}
