<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function store(Request $request) {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }
}