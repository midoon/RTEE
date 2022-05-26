@extends('layout.master')

@section('content')
@include('partial.navbar')
<h1>edit family</h1>
<div class="container">

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
        <input type="submit" name="submit" value="save">
    </form>
</div>
@endsection