<?php

namespace App\Exports;

use App\Models\CaseRecord;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Color;

class CasesExport implements FromQuery, WithHeadings, WithStyles, ShouldAutoSize
{
    public function query()
    {
        return CaseRecord::query()->select(
            'type',
            DB::raw('CASE WHEN is_attorney = 1 THEN "Yes" ELSE "No" END AS is_attorney'),
            'description',
            DB::raw('CASE WHEN is_hospitalized = 1 THEN "Yes" ELSE "No" END AS is_hospitalized'),
            'date_injured',
            'call_time',
            'firstname',
            'lastname',
            'phone',
            'email',
            'zip_code',
            'address',
            'share_url'
        );
    }

    public function headings(): array
    {
        return [
            'Liability Type',
            'Has Attorney',
            'Description',
            'Is Hospitalized',
            'Year Injured',
            'Call Time',
            'First Name',
            'Last Name',
            'Phone',
            'Email',
            'ZIP Code',
            'Address',
            'TFC URL'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:M1')->applyFromArray([
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['argb' => '00008b'],
            ],
            'font' => [
                'bold' => true,
                'color' => ['argb' => Color::COLOR_WHITE],
            ],
        ]);

        return $sheet;
    }
}
