<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanController extends Controller
{
    public function index()
    {
        // $pendapatan = DB::table('pendapatan')->get();
        $pendapatan = DB::table('pendapatan')
            ->join('pegawai', 'pendapatan.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('pendapatan.*', 'pegawai.pegawai_nama')
            ->paginate(5);
        return view('pendapatan.index', ['pendapatan' => $pendapatan]);
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pendapatan sesuai pencarian data
        $pendapatan = DB::table('pendapatan')
            ->join('pegawai', 'pendapatan.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('pendapatan.*', 'pegawai.pegawai_nama')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pendapatan ke view index
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
    public function detail($id)
    {
        // mengambil data pendapatan berdasarkan id yang dipilih
        $pendapatan = DB::table('pendapatan')
            ->join('pegawai', 'pendapatan.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('pendapatan.*', 'pegawai.pegawai_nama')
            ->where('ID', $id)->get();
        // passing data pendapatan yang didapat ke view edit.blade.php
        return view('pendapatan.detail', ['pendapatan' => $pendapatan]);
    }
}
