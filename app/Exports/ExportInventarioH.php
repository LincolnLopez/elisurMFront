<?php

namespace App\Exports;

use App\Models\TblInventarioHerramienta;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportInventarioH implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TblInventarioHerramienta::all();
    }
}
