@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="/css/warga/war-fam.css">
@endsection

@section('content')
@include('partial.navbar-warga')
<div class="konten" style="margin-left: 260px">
    <h1>list family</h1>
<div class="container">

    <table class="table table-hover">
        <tr>
            <th>NO.KK</th>
            <th>KEPALA KELUARGA</th>
            <th>DETAIL</th>
        </tr>
        @foreach($family as $f)
            <tr>
                <td>{{$f->no_kk}}</td>
                <td>{{$f->kep_keluarga}}</td>
                <td>
                    <a href="/warga/family/{{$f->id}}/anggota">anggota kk</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</div>
@endsection