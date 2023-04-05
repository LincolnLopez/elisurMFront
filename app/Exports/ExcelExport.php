<?php

namespace App\Exports;

use App\Models\TblInventario;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       
        return TblInventario::all();
    }

    
}