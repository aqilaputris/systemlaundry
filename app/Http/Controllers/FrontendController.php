<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\OrdersLaundryModel;
use App\Models\PackageModel;

class FrontendController extends Controller
{
    public function index()
    {
        // $data['type'] = DB::table('package')->
        return view('frontend.index');
    }
    
    public function order()
    {
        
    }
    
    public function postSave(Request $request) {
        $data = new OrdersLaundryModel();
        $data->code_order = $request->code_order;
        $data->package_id = $request->package_id;
        $data->total_price = $request->total_price;
        $data->user_name = $request->user_name;
        $data->user_phone = $request->user_phone;
        $data->user_address = $request->user_address;
        $data->date_drop_laundry = $request->date_drop_laundry;
        $data->status = 'Drop';

        $data->save();
        // return view()
        return redirect('frontend/nota');
      }

    public function nota()
    {
        $lastId = DB::table('orders_laundry')->orderBy('id','desc')->pluck('id')->first();
        $data['data'] = DB::table('orders_laundry')
        ->join('package','package.id','=','orders_laundry.package_id')
        ->select('orders_laundry.*','package.type','package.name','package.price')->where('orders_laundry.id', $lastId)->first();

        return view('frontend.nota', $data);
    }

    public function printnota()
    {
        $lastId = DB::table('orders_laundry')->orderBy('id','desc')->pluck('id')->first();
        $data['data'] = DB::table('orders_laundry')
        ->join('package','package.id','=','orders_laundry.package_id')
        ->select('orders_laundry.*','package.type','package.name','package.price')->where('orders_laundry.id', $lastId)->first();
        return view('frontend.printnota', $data);
    }

    public function express()
    {
        
        $code = DB::table('orders_laundry')->orderBy('id','desc')->pluck('id')->first();
        $kodeorder = $code+1;
        $codes = 'EX'.$kodeorder;
        $data['errors'] = $codes;

        $data['package'] = DB::table('package')->where('type','Express')->get(); 
        // dd($data['package']);
        return view('frontend.formorderexpress', $data);
    }

    public function laundry()
    {
        $code = DB::table('orders_laundry')->orderBy('id','desc')->pluck('id')->first();
        $kodeorder = $code+1;
        $codes = 'LD'.$kodeorder;
        $data['errors'] = $codes;

        $data['package'] = DB::table('package')->where('type','Laundry')->get();
        return view('frontend.formorderlaundry', $data);
    }

    public function ambilpaket(Request $request)
     {
     if ($request->type != '') {
         $data['errors'] = DB::table('orders_laundry')
           ->where('code_order', $request->status)->get();
       } else if ($request->status != '') {
         $data['errors'] = DB::table('orders_laundry')->where('status', $request->status)->get();
       }
         return redirect('/frontend');
     } 

    public static function getId(Request $request)
    {
         return Request::name('package_id');

    }

    public function cari(Request $request)
    {
        $package_id = $request->package_id;
        if ($package_id=='') {
            $data['val']    = 2;
        }else{
            $isi = PackageModel::where('id','=', $package_id)->first();
            if (empty($isi)) {
                $data['val']    = 0;
            }else{
                $data['val']    = 1;
                $data['data']    = $isi;
            }
        }
        return response($data);
    }
    public function mencari(Request $request) //function ini, nah namane harus dibedain biar ga bingung, bentar
    {
        $package_id = $request->package_id;
        if ($package_id=='') {
            $data['val']    = 2;
        }else{
            $isi = PackageModel::where('id','=', $package_id)->first();
            if (empty($isi)) {
                $data['val']    = 0;
            }else{
                $data['val']    = 1;
                $data['data']    = $isi;
            }
        }
        return response($data);
    }
}
