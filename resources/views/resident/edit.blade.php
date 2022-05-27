@extends('layout.master')
@include('partial.navbar')
@section('content')
<div class="container">
        <h1>EDIT WARGA</h1>

        <form action="/resident/{{$resident->id}}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="form-label" class="mb-2">No KK</label>
                <select class="form-select" aria-label="Default select example" name="family_id" required>
                    @foreach($families as $f)
                    <option value="{{$f->id}}" @if($f->id == $resident->family_id) selected @endif>{{$f->no_kk}}, kep KK: {{$f->kep_keluarga}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label  class="form-label">NIK</label>
                
                <input type="text" name="nik" class="form-control"   value="{{$resident->nik}}" required>
                
            </div>
            
            <div class="mb-3">
                <label  class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control"  value="{{$resident->nama}}" required>
            </div>
            <div class="mb-3">
                <label for="form-label" class="mb-2">Jenis Kelamin</label>
            <select class="form-select mb-3" aria-label="Default select example" name="jenis_kelamin" required>
                <option value="L"  @if($resident->jenis_kelamin == "L") selected @endif >Laki-Laki</option>
                <option value="P"  @if($resident->jenis_kelamin == "P") selected @endif >Perempuan</option>
            </select>
            </div>
           <div class="mb-3">
                <label for="form-label">Profesi</label>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="profesi" required>{{$resident->profesi}}</textarea>
                    
                </div>
           </div>
            <div class="mb-3">
                <label for="form-label">Alamat</label>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat" required>{{$resident->alamat}}</textarea>
                
                </div>
            </div>


            <input type="submit" name="submit" value="save">
        </form>
    </div>
@endsection