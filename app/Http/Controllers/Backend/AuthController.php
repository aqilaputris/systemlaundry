<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.auth.login');
    }

    public function postLogin(Request $request)
    {
        $admin = AdminModel::findBy("email", $request->email);

        $data['jumlah_order'] = DB::table('orders_laundry')->count();
        $data['jumlah_paket'] = DB::table('package')->count();
        $data['jumlah_user'] = DB::table('users')->count();


        if ($admin->email == NULL) {
            return response()->json(['status' => 500, 'message' => 'Email Anda Belum Terdaftar'], 200);
        }
        $user = AdminModel::where('email', '=', $request->email)->first();
        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('dashboard');
        // }


        $is_password_match = Hash::check($request->password, $admin->password);
        if (!$is_password_match) {
            return response()->json(['status' => 401, 'message' => 'Password Salah'], 200);
        }
        session(['user' => $user]);
        return redirect('/backend/dashboard');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/admin/auth/login');
    }
}
