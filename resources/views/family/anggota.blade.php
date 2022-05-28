@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="/css/family/fam-anggota.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('content')
@include('partial.navbar')
<div class="konten" style="margin-left: 260px">

    <div class="container">
        <h3 class="mt-3">Anggota Keluarga {{$kepkap}}</h3>
        <hr>
        <table class="table table-hover">
            <tr>
                <th>NO.KK</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>PROFESI</th>
                <th>ALAMAT</th>
                
            </tr>
            @foreach($resident as $r)
                <tr>
                    <td>{{$r->no_kk}}</td>
                    <td>{{$r->nik}}</td>
                    <td>{{$r->nama}}{{($r->kepkap==$r->nama)?  "*" :  ""}}</td>
                    <td>{{$r->jenis_kelamin}}</td>
                    <td>{{$r->profesi}}</td>
                    <td>{{$r->alamat}}</td>
                   
                </tr>
            @endforeach
        </table>
        </div>
</div>
@endsection