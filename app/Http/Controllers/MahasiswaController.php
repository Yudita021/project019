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
        Mahasiswa::create($request->all());
        return redirect('soal');
    }
}
