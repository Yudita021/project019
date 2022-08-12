<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@yield('css')
</head>
<body>
    
<div class="container">


<div class="row mt-2">
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

                        <input type="submit" name="submit" class="btn btn-lg btn-success">
                        <a href="{{url('soal')}}" class="btn btn-lg btn-danger float-right">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('isi')

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>
</html>