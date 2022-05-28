@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="/css/warga/war-anggota.css">
@endsection

@section('content')
@include('partial.navbar-warga')
<div class="konten" style="margin-left: 260px">
    <div class="container">

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