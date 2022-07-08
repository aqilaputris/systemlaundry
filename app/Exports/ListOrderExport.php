<?php

namespace App\Exports;

use App\Models\OrdersLaundryModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ListOrderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OrdersLaundryModel::findAll();
    }
}
