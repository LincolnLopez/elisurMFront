<?php

namespace App\Exports;

use App\Models\User;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class ExcelUsuario implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
{
    return User::select('id', 'name', 'email', 'created_at', 'updated_at')->get();
}
    public function headings(): array
{
    return [
        [
           
          'MULTISERVICIOS ELISUR USUARIOS',
           
        ],
        [
            'ID',
            'NOMBRE',
            'CORREO',
            'FECHA CREACIÓN',
            'FECHA MODIFICACIÓN'
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

    
    $sheet->mergeCells('A1:E1');
    $sheet->getStyle('A1:E2')->getFont()->setSize(14);
    $sheet->getStyle('A1:E2')->getFont()->setBold(true);
    $sheet->getStyle('A1:E1')->getAlignment()->setHorizontal('center');
    $sheet->getStyle('A1:E2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
    $sheet->getStyle('A1:E2')->getFill()->getStartColor()->setRGB('DDDDDD');
   // setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DATETIME);
}

    public function getColumnFormats(): array
    {
        return [
            'D' => \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DDMMYYYY,
            'E' => \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
