<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ScheduleExport implements FromArray, WithHeadings
{
    protected $scheduleData;

    public function __construct(array $scheduleData)
    {
        $this->scheduleData = $scheduleData;
    }

    /**
     * Mengembalikan data sebagai array.
     *
     * @return array
     */
    public function array(): array
    {
        return $this->scheduleData;
    }

    /**
     * Menentukan judul kolom untuk Excel.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'Sesi',
            'Peserta',
            'Waktu',
            'Prodi',
        ];
    }
}
