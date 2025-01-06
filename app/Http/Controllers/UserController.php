<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;

class UserController extends Controller
{
    public function login(){
    return view('auth.login');
    }
}
