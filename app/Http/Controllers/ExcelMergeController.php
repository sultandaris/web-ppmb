<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelMergeController extends Controller
{
    public function showForm()
    {
        return view('excel.merge');
    }

public function mergeFiles(Request $request)
    {
        $request->validate([
            'file1' => 'required|file|mimes:xlsx,xls',
            'file2' => 'required|file|mimes:xlsx,xls',
            'file3' => 'required|file|mimes:xlsx,xls',
        ]);

        $files = [$request->file('file1'), $request->file('file2'), $request->file('file3')];
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $currentRow = 1;

        foreach ($files as $file) {
            $excel = Excel::toArray([], $file);
            foreach ($excel[0] as $row) {
                $sheet->fromArray($row, null, 'A' . $currentRow);
                $currentRow++;
            }
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'merged_file.xlsx';
        $filePath = storage_path('app/' . $fileName);
        $writer->save($filePath);

        return response()->download($filePath)->deleteFileAfterSend(true);
    }
}