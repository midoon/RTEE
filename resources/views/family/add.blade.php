@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="/css/family/fam-add.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('content')
@include('partial.navbar')
<div class="konten" style="margin-left: 260px">
    <h1>add family</h1>
<div class="container">

    <form action="/family/store" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">NO KK</label>
            <input type="text" name="no_kk" class="form-control" required>
        </div>       
        <div class="mb-3">
            <label  class="form-label">Kepala Keluarga</label>
            <input type="text" name="kep_keluarga" class="form-control" required>
        </div>
        <input type="submit" name="submit" value="save">
    </form>
</div>
</div>
@endsection