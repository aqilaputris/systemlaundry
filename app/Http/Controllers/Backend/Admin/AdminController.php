<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class AdminController extends Controller
{
  public function getIndex(Request $request)
  {
    $keyword = $request->keyword;
    //data index
    if (!$keyword) {
      $data['errors'] = DB::table('admin')->orderBy('id', 'desc')->paginate(5);
    } else {
      //data search
      $data['errors'] = DB::table('admin')
        ->where('name', 'LIKE', '%' . $keyword . '%')
        ->orWhere('email', 'LIKE', '%' . $keyword . '%')
        ->orWhere('password', 'LIKE', '%' . $keyword . '%')->paginate(5);
    }
    return view('backend.admin.index', $data);
  }
  // Add
  public function getAdd()
  {
    return view('backend.admin.formadd');
  }
  // Menyimpan Data Add
  public function postSave(Request $request)
  {
    $data = new AdminModel();
    $data->name = $request->name;
    $data->email = $request->email;
    $data->password = Hash::make($request->password);

    $data->save();
    return redirect('backend/admin/index');
  }
  // Edit
  public function getEdit($id)
  {
    $data['admin'] = AdminModel::findById($id);

    return view('backend/admin/formedit', ['admin' => $data['admin']]);
  }

  // Menyimpan Data  Edit
  public function postEdit(Request $request, $id)
  {
    $data =  AdminModel::findById($id);
    $data->name = $request->name;
    $data->email = $request->email;
    $data->save();


    return redirect('backend/admin/index');
  }

  // Detail Data

  public function getDetail($id)
  {
    $admin = AdminModel::find($id);
    return view('backend/admin/detailadmin', ["admin" => $admin]);
  }

  // Menghapus Data
  public function getDelete($id)
  {
    $data = AdminModel::findById($id);
    $data->delete();
    return redirect('backend/admin/index');
  }
}