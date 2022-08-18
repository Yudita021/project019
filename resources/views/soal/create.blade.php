@extends('admin-theme._master')
@section('judul','Tambah Data')
@section ('isi')
<div class="container">


<div class="row mt-3">
    <div class="col-6">
        <div class="card">
            <div class="class-header">
                <div class="card-body">
                    <form action="{{route('soal.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama MK</label>
                            <input type="text" name="nama_mk" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Dosen</label>
                            <input type="text" name="dosen" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Soal</label>
                            <input type="text" name="jumlah_soal" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="keterangan" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        
                        <a type="submit" name="submit" class="btn btn-lg btn-success">Submit <i class="fa-solid fa-file-circle-plus"></i></a>
                        <a href="{{url('soal')}}" class="btn btn-lg btn-danger float-right"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    

