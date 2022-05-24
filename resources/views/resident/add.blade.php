@extends('layout.master')

@section('content')
<div class="container">
        <h1>CREATE WARGA</h1>

        <form action="/resident/store" method="post">
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


            <input type="submit" name="submit" value="save">
        </form>
    </div>
@endsection