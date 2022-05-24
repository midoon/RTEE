@extends('layout.master')

@section('content')
    <form method="post" action="/logout">
        @csrf
        <button class="w-15 btn btn-lg btn-danger" type="submit">Sign Out</button>
    </form>
    <a href="/dashboard/listResident">List Warga</a>
    <a href="/dashboard/addResident">Tambah Warga</a>
    <a href="/dashboard/listFamily">List KK</a>
    <a href="/dashboard/addFamily">Tambah KK</a>
@endsection