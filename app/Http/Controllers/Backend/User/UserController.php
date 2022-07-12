<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class UserController extends Controller
{
  public function getIndex(Request $request)
  {
    $keyword = $request->keyword;
    //data index
    if (!$keyword) {
      $data['errors'] = DB::table('users')->orderBy('id', 'desc')->paginate(5);
    } else {
      //data search
      $data['errors'] = DB::table('users')
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
    $data->image = $request->image;
    $data->email = $request->email;
    $data->password = Hash::make($request->password);

    $data->save();
    return redirect('backend/admin/index');
  }
  // Edit
  public function getEdit($id)
  {
    $data['user'] = AdminModel::findById($id);

    return view('backend/admin/formedit', ['user' => $data['user']]);
  }

  // Menyimpan Data  Edit
  public function postEdit(Request $request, $id)
  {
    $data =  AdminModel::findById($id);
    $data->name = $request->name;
    $data->image = $request->image;
    $data->email = $request->email;
    $data->save();


    return redirect('backend/admin/index');
  }

  // Detail Data

  public function getDetail($id)
  {
    $user = AdminModel::find($id);
    return view('backend/admin/detail\admin', ["user" => $user]);
  }

  // Menghapus Data
  public function getDelete($id)
  {
    $data = AdminModel::findById($id);
    $data->delete();
    return redirect('backend/admin/index');
  }
}