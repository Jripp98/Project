<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengunjungController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel pengunjung
        $pengunjung= DB::table('pengunjung')->get();

        // mengirim ke halaman pengunjung untuk ditampilkan data
        return view('datapengunjung',['pengunjung'=>$pengunjung]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('pengunjung')->insert([
            'nama' => $request->nama,
            'plat' => $request->plat,
            'nomor' => $request->nomor,
            'jenis' => $request->jenis,
            'merek' => $request->merek
        ]);

        return redirect('/tampildata');
    }

    public function edit($nomor)
    {
        #ambil data pengunjung berdasarkan plat
        $pengunjung = DB::table('pengunjung')
        ->select('pengunjung.*')->where('pengunjung.id',$nomor)
        ->get();
        $pengunjung = json_decode($pengunjung, true);
        #passing data
        return view('edit', ['pengunjung' => $pengunjung]);
    }

    public function update(Request $request)
    {
        DB::table('pengunjung')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'plat' => $request->plat,
            'nomor' => $request->nomor,
            'jenis' => $request->jenis,
            'merek' => $request->merek
        ]);

        return redirect('/tampildata');
    }
    

    public function hapus($plat)
    {
        DB::table('pengunjung')->where('id', $plat)->delete();
        return redirect('/tampildata');
    }
}
