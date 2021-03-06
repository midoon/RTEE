@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="/css/resident/res-add.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
@endsection


@section('content')

@include('partial.navbar')


<div class="konten" style="margin-left: 250px">
    <div class="container">
        <h3 class="mt-3">Tambah Warga</h3>
        <hr>

        <form action="/resident/store" method="post" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="form-label" class="mb-2">No KK</label>
                <select class="form-select mb-3" aria-label="Default select example" name="family_id" required>
                    <option selected>No Kartu Keluarga</option>
                    @foreach($families as $f)
                    <option value="{{$f->id}}">{{$f->no_kk}}, kep KK: {{$f->kep_keluarga}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label  class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label  class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="form-label" class="mb-2">Jenis kelamin</label>
                <select class="form-select mb-3" aria-label="Default select example" name="jenis_kelamin">
                    <option selected>Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fomr-label" class="mb-2">Profesi</label>
                <div class="form-floating mb-3">
                    
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="profesi" required></textarea>
                    <label for="floatingTextarea2">profesi</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="form-label" class="mb-2">Alamat</label>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat" required></textarea>
                    <label for="floatingTextarea2">alamat</label>
                </div>
            </div>


            <input type="submit" name="submit" value="TAMBAH" class="btn  btn-success">
        </form>
    </div>
</div>
@endsection