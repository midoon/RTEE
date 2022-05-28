@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="/css/family/fam-edit.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('content')
@include('partial.navbar')
<div class="konten" style="margin-left: 260px">
<div class="container">
    <h3 class="mt-3">Edit Data Keluarga</h3>
    <hr>

    <form action="/family/{{$family->id}}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label  class="form-label">NO KK</label>
            <input type="text" name="no_kk" class="form-control" value="{{$family->no_kk}}" required>
        </div>       
        <div class="mb-3">
            <label  class="form-label">Kepala Keluarga</label>
            <input type="text" name="kep_keluarga" class="form-control" value="{{$family->kep_keluarga}}" required>
        </div>
        <input type="submit" name="submit" value="UPDATE" class="btn btn-success"> 
    </form>
</div>
</div>
@endsection