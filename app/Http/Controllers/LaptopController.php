<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaptopController extends Controller
{
    //
    public function index()
    {
        // DB::table('')->get();
        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get(); //hasil get() adalah Array of Object [object][]

        $laptop = DB::table('laptop')->paginate(5);

        // mengirim data laptop ke view index
        return view('laptop.index', ['laptop' => $laptop]); //teknik komunikasi/passing value antara controller dan view
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table laptop sesuai pencarian data
        $laptop = DB::table('laptop')
            ->where('merklaptop', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('laptop.index', ['laptop' => $laptop]);
    }
    public function tambah()
    {

        // memanggil view tambah
        return view('laptop.tambah');
    }
    public function store(Request $request)
    {
        // insert data ke table laptop
        DB::table('laptop')->insert([
            'merklaptop' => $request->merk,
            'stocklaptop' => $request->stock,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman laptop
        return redirect('/laptop');
    }
    public function edit($id)
    {
        // mengambil data laptop berdasarkan id yang dipilih
        $laptop = DB::table('laptop')->where('kodelaptop', $id)->get();
        // passing data laptop yang didapat ke view edit.blade.php
        return view('laptop.edit', ['laptop' => $laptop]);
    }
    public function update(Request $request)
    {
        // update data laptop
        DB::table('laptop')->where('kodelaptop', $request->id)->update([
            'merklaptop' => $request->merk,
            'stocklaptop' => $request->stock,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman laptop
        return redirect('/laptop');
    }
    public function hapus($id)
    {
        // menghapus data laptop berdasarkan id yang dipilih
        DB::table('laptop')->where('kodelaptop', $id)->delete();

        // alihkan halaman ke halaman laptop
        return redirect('/laptop');
    }
    public function detail($id)
    {
        // mengambil data laptop berdasarkan id yang dipilih
        $laptop = DB::table('laptop')->where('kodelaptop', $id)->get();
        // passing data laptop yang didapat ke view edit.blade.php
        return view('laptop.detail', ['laptop' => $laptop]);
    }
}
