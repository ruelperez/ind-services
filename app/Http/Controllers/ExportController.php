<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CasesExport;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel as ExcelType;

class ExportController extends Controller
{
    public function cases()
    {
        return Excel::download(new CasesExport, 'exported-cases-' . Carbon::now()->format('Y-m-d-h-m-i-s') . '.xlsx', ExcelType::XLSX);
    }
}
