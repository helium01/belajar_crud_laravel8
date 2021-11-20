<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\index;

class siswacontroller extends Controller
{
    public function index(){
        $tabel_siswa = \App\Models\siswa::all();
        return view('siswa.index',['tabel_siswa'=>$tabel_siswa]);
    }
    public function create(Request $request)
    {
        \App\Models\siswa::create($request->all());
        return redirect('/')->with('sukses','data tersimpan');
    }
    public function edit($id){
        $siswa=\App\Models\siswa::find($id);
       return view('siswa/edit',['siswa'=>$siswa]);
    }
    public function update(Request $request, $id)
    {
        $siswa=\App\Models\siswa::find($id);
        $siswa->update($request->all());
        return redirect('/')->with ('sukses','data terupdate');

    }
    public function delete($id){
        $siswa=\App\Models\siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/')->with('sukses','data berhasil di hapus');
    }
}
