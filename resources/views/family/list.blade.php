@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="/css/family/fam-list.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('content')
@include('partial.navbar')
<div class="konten" style="margin-left: 260px">
    <h1>list family</h1>
<div class="container">

    <table class="table table-hover">
        <tr>
            <th>NO.KK</th>
            <th>KEPALA KELUARGA</th>
            <th></th>
            <th>DETAIL</th>
        </tr>
        @foreach($family as $f)
            <tr>
                <td>{{$f->no_kk}}</td>
                <td>{{$f->kep_keluarga}}</td>
                <td>
                    <a href="/family/{{$f->id}}/edit">Edit</a>
                    <form action="/family/{{$f->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
                <td>
                    <a href="/family/{{$f->id}}/anggota">anggota kk</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</div>
@endsection