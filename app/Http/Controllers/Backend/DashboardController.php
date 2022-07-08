<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getIndex()
    {
        $data['errors'] = DB::table('orders_laundry')->orderBy('id', 'desc')->limit(5)->get();
        $data['jumlah_paket'] = Db::table('package')->count();
        $data['jumlah_order'] = Db::table('orders_laundry')->count();
        $data['jumlah_user'] = Db::table('users')->count();
        return view('Dashboard.index', $data);
    }

    public function getPosts()
    {
        return view('Posts.index');
    }
    
}
