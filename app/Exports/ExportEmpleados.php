<?php

namespace App\Exports;

use App\Models\TblEmpleado;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportEmpleados implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TblEmpleado::all();
    }
}
