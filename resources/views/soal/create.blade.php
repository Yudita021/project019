@extends('admin-theme._master')
@section('judul','Tambah Data')
@section ('isi')
<div class="container">


<div class="row mt-3">
    <div class="col-6">
        <div class="card">
            <div class="class-header">
                <h3 class="text-center">Tambah Data</h3>
                <div class="card-body">
                    
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form action="{{route('soal.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama MK</label>
                            <input type="text" name="nama_mk" class="form-control" value="{{ old('nama_mk') }}">
                        </div>

                        <div class="form-group">
                            <label for="">Dosen</label>
                            <input type="text" name="dosen" class="form-control" value="{{ old('dosen') }}">
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Soal</label>
                            <input type="text" name="jumlah_soal" class="form-control" value="{{ old('jumlah_soal') }}">
                        </div>

                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="keterangan" id="" cols="30" rows="5" class="form-control">{{ old('keterangan') }}</textarea>
                        </div>

                        <button type="submit" name="submit" class="btn btn-lg btn-success">Submit <i class="fa-solid fa-file-circle-plus"></i></button>
                        <a href="{{url('soal')}}" class="btn btn-lg btn-danger float-right"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    

