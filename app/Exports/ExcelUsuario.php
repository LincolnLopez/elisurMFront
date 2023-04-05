<?php

namespace App\Exports;

use App\Models\User;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Events\AfterSheet;

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
            'ELISUASERVICIOS',
            '',
            '',
            '',
            '',
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
    $sheet->getStyle('A1:F2')->getFont()->setSize(14);
    $sheet->getStyle('A1:F2')->getFont()->setBold(true);
    $sheet->getStyle('A1:F2')->getAlignment()->setHorizontal('center');
    $sheet->getStyle('A1:F2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
    $sheet->getStyle('A1:F2')->getFill()->getStartColor()->setRGB('DDDDDD');
}

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $cellRange = 'A1:F1'; // Encabezado de la tabla
                $event->sheet->getStyle($cellRange)->applyFromArray([
                    'font' => [
                        'bold' => true
                    ],
                    'alignment' => [
                        'horizontal' => 'center'
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => 'thin',
                            'color' => ['argb' => '000000'],
                        ],
                    ],
                    'fill' => [
                        'fillType' => 'solid',
                        'startColor' => [
                            'argb' => 'DDDDDD',
                        ],
                    ],
                ]);

                $event->sheet->setCellValue('A1', 'Elisur'); // Título de la tabla

                $event->sheet->getStyle('A1')->getFont()->setSize(16); // Tamaño de la fuente del título
            },
        ];
    }



    public function getColumnFormats(): array
    {
        return [
            'D' => \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DDMMYYYY,
            'E' => \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
