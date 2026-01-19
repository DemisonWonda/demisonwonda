<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Nilai;
use PDF; // import DOMPDF

class PrintController extends Controller
{
    // Print Data Siswa (HTML)
    public function siswa()
    {
        $pages = 'print_siswa';
        $siswas = Siswa::all();
        return view('print.siswa', compact('siswas', 'pages'));
    }

    // Print Nilai Siswa (HTML)
    public function nilai()
    {
        $pages = 'print_nilai';
        $nilais = Nilai::with('siswa','mapel')->get();
        return view('print.nilai', compact('nilais', 'pages'));
    }

    // Cetak Data Siswa PDF
    public function siswaPdf()
    {
        $siswas = Siswa::all();
        $pdf = PDF::loadView('print.pdf.siswa', compact('siswas'));
        return $pdf->download('data_siswa.pdf');
    }

    // Cetak Nilai Siswa PDF
    public function nilaiPdf()
    {
        $nilais = Nilai::with('siswa','mapel')->get();
        $pdf = PDF::loadView('print.pdf.nilai', compact('nilais'));
        return $pdf->download('nilai_siswa.pdf');
    }
}
