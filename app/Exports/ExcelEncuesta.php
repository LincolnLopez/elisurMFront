<?php

namespace App\Exports;

use App\Models\TblEncuestum;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExcelEncuesta implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TblEncuestum::all();
    }
    public function headings(): array
    {
        return [
            [
               
              'MULTISERVICIOS ELISUR RESULTADO ENCUESTA DE FALLAS',
               
            ],
            [

            ],
            [
                'ID PREGUNTA',
                'PREGUNTA 1',
                'PREGUNTA 2',
                'PREGUNTA 3',
                'PREGUNTA 4',
                'PREGUNTA 5',
                'PREGUNTA 6',
                'PREGUNTA 7',
                

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
    
        
        $sheet->mergeCells('A1:H1');
        $sheet->mergeCells('A2:H2');
        $sheet->getStyle('A1:H1')->getFont()->setSize(16);
        $sheet->getStyle('A2:H3')->getFont()->setSize(14);
        $sheet->getStyle('A1:H3')->getFont()->setBold(true);
        $sheet->getStyle('A1:H3')->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A1:H3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $sheet->getStyle('A3:H3')->getFill()->getStartColor()->setRGB('C2E0EE');
       // setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DATETIME);
    }
}
