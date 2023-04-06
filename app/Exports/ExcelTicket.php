<?php

namespace App\Exports;

use App\Models\TblReporteFalla;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExcelTicket implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TblReporteFalla::all();
    }

    public function headings(): array
    {
        return [
            [
               
              'MULTISERVICIOS ELISUR TICKETS REPORTE FALLAS',
               
            ],
            [

            ],
            [
                'No.',
                'ID SERVICIO',
                'NOMBRE DE CLIENTE',
                'TELEFONO',
                'CORREO',
                'TEMA',
                'DESCRIPCIÓN',
                'UBICACIÓN',
                'FECHA APERTURA',
                'FECHA EN PROCESO',
                'ESTADO',
                'NOMBRE EMPLEADO',

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
    
        
        $sheet->mergeCells('A1:L1');
        $sheet->mergeCells('A2:L2');
        $sheet->getStyle('A1:L1')->getFont()->setSize(16);
        $sheet->getStyle('A2:L3')->getFont()->setSize(14);
        $sheet->getStyle('A1:L3')->getFont()->setBold(true);
        $sheet->getStyle('A1:L3')->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A1:L3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $sheet->getStyle('A3:L3')->getFill()->getStartColor()->setRGB('C2E0EE');
       // setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DATETIME);
    }
}
