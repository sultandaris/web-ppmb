<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ParticipantsImport;
use App\Exports\ScheduleExport;
use App\Models\Schedule;

class HomeController extends Controller
{
    public function index()
    {
        return view('adminpage');
    }

    // Menghandle upload dan proses jadwal
    public function processParticipants(Request $request)
    {
        // Validasi file yang diupload
        $request->validate([
            'participants_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        // Mengambil file yang diupload
        $file = $request->file('participants_file');

        try {
            // Mengimpor data peserta dari Excel
            $participants = Excel::toArray(new ParticipantsImport, $file)[0];

            // Proses peserta menjadi jadwal
            $scheduleData = $this->generateSchedule($participants);

            // Mengexport jadwal ke file Excel
            return Excel::download(new ScheduleExport($scheduleData), 'schedule.xlsx');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    private function generateSchedule(array $participants)
    {
        // Contoh sederhana: Membagi peserta menjadi kelompok
        $schedule = [];
        $groupSize = 5; // Misalnya, 5 peserta per sesi

        foreach (array_chunk($participants, $groupSize) as $index => $group) {
            $schedule[] = [
                'session' => 'Sesi ' . ($index + 1),
                'participants' => implode(', ', array_column($group, 'name')),
                'time' => '08:00 - 09:00', // Contoh waktu, bisa dimodifikasi sesuai kebutuhan
            ];
        }

        return $schedule;
    }
}
