<?php

namespace App\Http\Controllers\Backend\Package;

use App\Http\Controllers\Controller;
use App\Models\PackageModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PackageController extends Controller
{
  public function getIndex(Request $request)
  {
    $keyword = $request->keyword;
    //data index
    if (!$keyword) {
      $data['errors'] = DB::table('package')->orderBy('id', 'desc')->paginate(5);
    } else {
      //data search
      $data['errors'] = DB::table('package')
        ->where('name', 'LIKE', '%' . $keyword . '%')
        ->orWhere('email', 'LIKE', '%' . $keyword . '%')
        ->orWhere('password', 'LIKE', '%' . $keyword . '%')->paginate(5);
    }
    return view('backend.package.index', $data);
  }

        // Add
    public function getAdd(){
        return view('backend.package.formadd');
    }

    // Menyimpan Data Add
    public function postSave(Request $request) {
        $data = new PackageModel();
        $data->type = $request->type;
        $data->name = $request->name;
        $data->price = $request->price;

        $data->save();
        return redirect('backend/package/index');
      }
      // Edit
      public function getEdit($id)
      {
        $data['package'] = PackageModel::findById($id);

        return view('backend/package/formedit', ['package' => $data['package'] ]);
      }
      
      // Menyimpan Data  Edit
    public function postEdit(Request $request, $id){
      $data =  PackageModel::findById($id);
      $data->type = $request->type;
      $data->name = $request->name;
      $data->price = $request->price;
      $data->save();

      return redirect('backend/package/index');
    }

    // Detail Data
               
    public function getDetail($id)
    {
        $package = PackageModel::find($id);
        return view('backend/package/detailpackage', ["package"=>$package]);
    }

      // Menghapus Data
     public function getDelete($id){
       $data = PackageModel::findById($id);
       $data->delete();
       return redirect('backend/package/index');
     }
}
