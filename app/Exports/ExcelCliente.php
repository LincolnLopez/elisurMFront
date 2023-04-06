<?php

namespace App\Exports;

use App\Models\TblCliente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExcelCliente implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TblCliente::all();
    }
    public function headings(): array
    {
        return [
            [
               
              'MULTISERVICIOS ELISUR CLIENTES',
               
            ],
            [

            ],
            [
                'ID EMPLEADO',
                'DNI',
                'NOMBRE',
                'APELLIDOS',
                'DIRECCIÓN',
                'RTN',
                'TELEFONO',
                'CORREO',
                'FECHA',
                'ESTADO',
                'ID TIPO CLIENTE',

            ]
        ];
    }
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 16,
                'color' => ['rgb' => 'B10714'],
                range('A1','E1'),
            ],
            
        ]);
    
        
        $sheet->mergeCells('A1:K1');
        $sheet->mergeCells('A2:K2');
        $sheet->getStyle('A1:K1')->getFont()->setSize(16);
        $sheet->getStyle('A2:K3')->getFont()->setSize(14);
        $sheet->getStyle('A1:K3')->getFont()->setBold(true);
        $sheet->getStyle('A1:K3')->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A1:K3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $sheet->getStyle('A3:K3')->getFill()->getStartColor()->setRGB('C2E0EE');
       // setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DATETIME);
    }
}
