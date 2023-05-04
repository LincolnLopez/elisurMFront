<?php

namespace App\Exports;

use App\Models\User;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Facades\Excel;

use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithWatermark;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

use Illuminate\Support\Facades\Storage;

use Maatwebsite\Excel\Concerns\WithEvents;

use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Drawing\Worksheet as DrawingWorksheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing as WorksheetDrawing;

use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

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
                range('A2', 'E2'),
            ],

        ]);


        
        $sheet->mergeCells('A1:G1');
        $sheet->mergeCells('A2:G2');
        $sheet->getStyle('A1:G1')->getFont()->setSize(16);
        $sheet->getStyle('A2:G3')->getFont()->setSize(14);
        $sheet->getStyle('A1:G3')->getFont()->setBold(true);
        $sheet->getStyle('A1:G3')->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A1:G3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $sheet->getStyle('A3:G3')->getFill()->getStartColor()->setRGB('C2E0EE');
        
       
    
        // setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DATETIME);

        // Establecer el tamaño de la imagen de marca de agua
       /* $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setPath(public_path('vendor/adminlte/dist/img/logo.jpeg'));
        $drawing->setWidth(50);
        $drawing->setHeight(50);
        $drawing->setWorksheet($sheet);
        $drawing->setCoordinates('E17');*/

        // Centrar la imagen de marca de agua en el medio de la hoja




    }

    public function getColumnFormats(): array
    {
        return [
            'D' => \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DDMMYYYY,
            'E' => \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
