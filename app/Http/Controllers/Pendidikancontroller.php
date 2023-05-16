<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class Pendidikancontroller extends Controller
{
    public function index(){
        return view('HomePendidikan',[
            'mahasiswa'=> Pendidikan::all(),
        ]);
    }

    public function create(Request $request){
        $mahasiswa  = new Pendidikan();

        $mahasiswa -> nim = $request -> nim;
        $mahasiswa -> nama_M = $request -> nama;
        $mahasiswa -> jurusan = $request -> jurusan;
        $mahasiswa -> prodi = $request -> prodi;

        $mahasiswa -> save();
        return redirect()->route('halaman_utama');
    }

    public function edit($nim){
        // dd($nim);
        $mahasiswa = Pendidikan::find($nim);
        return view('edit',[
            'editm'=> $mahasiswa,
        ]);
    }

    public function update(Request $request, $nim){
          $mahasiswa = Pendidikan::find($nim);
        //kiri dari db kanan dari form
        $mahasiswa -> nim = $request -> nim;
        $mahasiswa -> nama_M=$request-> nama;
        $mahasiswa -> jurusan=$request -> jurusan;
        $mahasiswa -> prodi=$request -> prodi;

        $mahasiswa -> save();

        return redirect()->route('halaman_utama');

    }
    public function destroy($nim){
        $mahasiswa = Pendidikan::find($nim);
        $mahasiswa->delete();

         return redirect()->route('halaman_utama');
    }
}
