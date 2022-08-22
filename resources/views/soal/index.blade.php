@extends('admin-theme._master')
@section('judul', 'Data Soal')
@section('isi')

<div class="row mt-2">
    <div class="col-12">
    
        <div class="card">
          <div class="card-header"><b>DATA SOAL</b>
          <a href="{{route('soal.create')}}" class="btn btn-sm float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA SOAL</a>
          </div>
         
        <div class="container">
            <div class="class-header">           
           
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Matkul</th>
                            <th>Dosen</th>
                            <th>Jumlah Soal</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                        <tbody>
                            @foreach($ma as $soal)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$soal->nama_mk}}</td>
                                <td>{{$soal->dosen}}</td>
                                <td>{{$soal->jumlah_soal}}</td>
                                <td>{{$soal->keterangan}}</td>
                                <td>
                                
                                  <form action="{{route('soal.remove', $soal->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm ('Anda Yakin?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                                    <a href="{{ route('soal.edit', $soal->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-edit"></i> Edit</a>
                                  </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
    
