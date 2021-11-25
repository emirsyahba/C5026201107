<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanController extends Controller
{
    public function index()
    {
        $pendapatan = DB::table('pendapatan')->get();
        return view('pendapatan.index', ['pendapatan' => $pendapatan]);
    }

    public function tambah()
    {
        return view('pendapatan.tambah');
    }

    public function store(Request $request)
    {
        DB::table('pendapatan')->insert([
            'IDPegawai' => $request->idpegawai,
            'Bulan' => $request->bulan,
            'Tahun' => $request->tahun,
            'Gaji' => $request->gaji,
            'Tunjangan' => $request->tunjangan
        ]);
        return redirect('/pendapatan');
    }

    public function edit($id)
    {
        $pendapatan = DB::table('pendapatan')->where('ID', $id)->get();
        return view('pendapatan.edit', ['pendapatan' => $pendapatan]);
    }

    public function update(Request $request)
    {
        DB::table('pendapatan')->where('ID', $request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Bulan' => $request->bulan,
            'Tahun' => $request->tahun,
            'Gaji' => $request->gaji,
            'Tunjangan' => $request->tunjangan
        ]);
        return redirect('/pendapatan');
    }

    public function hapus($id)
    {
        DB::table('pendapatan')->where('ID', $id)->delete();
        return redirect('/pendapatan');
    }
}
