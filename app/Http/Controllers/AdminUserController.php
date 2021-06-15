<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $credentials = $request->only('email', 'password');


        if (! Auth::guard('admin')->attempt($credentials)) {
            return back()->withError([
                'message' => "Worng Information"
            ]);
        }
        return redirect()->route('dashboard.index')->withSuccess('You have been authenticated');

    }

    public function logout() {

    }
}
