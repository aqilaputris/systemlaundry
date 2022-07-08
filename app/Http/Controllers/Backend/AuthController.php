<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('backend.auth.login');
    }

    public function postLogin(Request $request)
    {
        $admin = AdminModel::findBy("email", $request->email);

        if ($admin->email == NULL) {
            return response()->json(['status' => 500, 'message' => 'Email Anda Belum Terdaftar'], 200);
        }

        $is_password_match = Hash::check($request->password, $admin->password);
        if (!$is_password_match) {
            return response()->json(['status' => 401, 'message' => 'Password Salah'], 200);
        }

        return view('dashboard.index');
    }
}
