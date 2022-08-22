<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $ma = Mahasiswa::all();
        return view('soal.index', compact('ma'));
    }

    public function create(){
        return view('soal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mk'=>'required|min:3',
            'dosen'=>'required|min:3',
            'jumlah_soal'=>'required',
            'keterangan'=>'required'
        ]);
        Mahasiswa::create($request->all());
        return redirect('soal');
    }

    public function destroy(Mahasiswa $id)
    {
        $id->delete();
        return redirect('soal');
    }

    public function edit(Mahasiswa $soal)
    {
        return view('soal.edit', compact('soal')) ;
    }

    public function update(Request $request, Mahasiswa $soal)
    {
        $request->validate([
            'nama_mk'=>'required|min:3',
            'dosen'=>'required|min:3',
            'jumlah_soal'=>'required',
            'keterangan'=>'required'
        ]);
        $soal->update($request->all());
        return redirect('soal') ;
    }

}
