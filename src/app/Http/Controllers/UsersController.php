<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }

    public function index()
    { 
        $users = User::orderBy('id', 'DESC')->get();
        return view('usersitems', compact('users'));
    }
}
