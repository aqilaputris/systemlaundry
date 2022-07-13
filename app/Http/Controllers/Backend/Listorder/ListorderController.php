<?php

namespace App\Http\Controllers\Backend\Listorder;

use App\Http\Controllers\Controller;
use App\Models\OrdersLaundryModel;
use App\Exports\ListOrderExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PackageModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class ListorderController extends Controller
{
    
  public function getIndex(Request $request)
  {
    $keyword = $request->keyword;
    //data index
    if (!$keyword) {
      $data['errors'] = DB::table('orders_laundry')->orderBy('id', 'desc')->paginate(5);
    } else {
      //data search
      $data['errors'] = DB::table('orders_laundry')
        ->where('code_order', 'LIKE', '%' . $keyword . '%')
        ->orWhere('code_order', 'LIKE', '%' . $keyword . '%')
        ->orWhere('package_id', 'LIKE', '%' . $keyword . '%')
        ->orWhere('total_price', 'LIKE', '%' . $keyword . '%')
        ->orWhere('user_name', 'LIKE', '%' . $keyword . '%')
        ->orWhere('user_phone', 'LIKE', '%' . $keyword . '%')
        ->orWhere('user_address', 'LIKE', '%' . $keyword . '%')->paginate(5);
    }
    //data filter
    if ($request->type != '') {
      $data['errors'] = DB::table('orders_laundry')
        ->join('package', 'package.id', '=', 'orders_laundry.package_id')
        ->where('package.type', $request->type)->paginate(5);
    } 
    if ($request->status != '') {
      $data['errors'] = DB::table('orders_laundry')->where('status', $request->status)->paginate(5);
    }
    return view('backend.listorder.index', $data);
  }

        // Add
    public function getAdd(){
        $code = DB::table('orders_laundry')->orderBy('id','desc')->pluck('id')->first();
        $kodeorder = $code+1;
        $codes = 'LD'.$kodeorder;
        $data['code'] = $codes;

        $code = DB::table('orders_laundry')->orderBy('id','desc')->pluck('id')->first();
        $kodeorder = $code+1;
        $codes = 'EX'.$kodeorder;
        $data['codes'] = $codes;

        $data['express'] = Db::table('package')->where('type','Express')->get();
        $data['laundry'] = Db::table('package')->where('type','Laundry')->get();
        
        return view('backend.listorder.formadd',$data);
    }

    // Menyimpan Data Add
    public function postSave(Request $request) {
        $data = new OrdersLaundryModel();
        $data->code_order = $request->code_order;
        $data->package_id = $request->package_id;
        $data->total_price = $request->total_price;
        $data->user_name = $request->user_name;
        $data->user_phone = $request->user_phone;
        $data->user_address = $request->user_address;
        $data->status = "Drop";

        $data->save();
        return redirect('backend/listorder/index');
      }
      // Edit
      public function getEdit($id)
      {
        $data['listorder'] = OrdersLaundryModel::findById($id);

        return view('backend/listorder/formedit', ['listorder' => $data['listorder'] ]);
      }
      
      // Menyimpan Data  Edit
    public function postEdit(Request $request, $id){
      $data =  OrdersLaundryModel::findById($id);
        $data->code_order = $request->code_order;
        $data->package_id = $request->package_id;
        $data->total_price = $request->total_price;
        $data->user_name = $request->user_name;
        $data->user_phone = $request->user_phone;
        $data->user_address = $request->user_address;
        $data->status = $request->status;
        $data->save();

      return redirect('backend/listorder/index');
    }

    // Detail Data
               
    public function getDetail($id)
    {
        $listorder = OrdersLaundryModel::find($id);
        return view('backend/listorder/detaillistorder', ["listorder"=>$listorder]);
    }

      // Menghapus Data
     public function getDelete($id){
       $data = OrdersLaundryModel::findById($id);
       $data->delete();
       return redirect('backend/listorder/index');
     }

     public function index(Request $request)
	{
		
    if($request->day != '' && $request->month != '')
    {
      $data['coba'] = DB::table('orders_laundry')
      ->whereDay('date_drop_laundry', $request->day)
      ->whereMonth('date_drop_laundry', $request->month)
      ->get();
    }
    elseif ($request->day != '' && $request->month == '') 
    {
      $data['coba'] = DB::table('orders_laundry')
      ->whereDay('date_drop_laundry', $request->day)
      ->get();
    }
    elseif($request->day == '' && $request->month != '')
    {
      $data['coba'] = DB::table('orders_laundry')
      ->whereMonth('date_drop_laundry', $request->month)->get();
    }
    else
    {
      $data ['coba'] = OrdersLaundryModel::findAll();
    }

		return view('backend/crudexcel/index', $data);
	}
 
	public function export_excel()
	{
		return Excel::download(new ListOrderExport, 'listorder.xlsx');
	}
}


