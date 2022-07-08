<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\OrdersLaundry;
use Illuminate\Http\Request;

class OrdersLaundryService extends OrdersLaundry
{
    // TODO : Make your own service method

     public static function getId(Request $request)
     {
         $data = $request->package_id;

         return $data;

     }

}