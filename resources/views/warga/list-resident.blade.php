@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="/css/warga/war-res.css">
@endsection

@section('content')
@include('partial.navbar-warga')
<div class="konten" style="margin-left: 260px; ">
    <div class="container">
        <h3 class="mt-3">Daftar Warga</h3>
        <hr>

        <table class="table table-hover">
            <tr class="text-center">
                <th>NO.KK</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>PROFESI</th>
                <th>ALAMAT</th>
                
            </tr>
            @foreach($resident as $r)
                <tr class="text-center">
                    <td>{{$r->no_kk}}</td>
                    <td>{{$r->nik}}</td>
                    <td>{{$r->nama}}{{($r->kepkap==$r->nama)?  "*" :  ""}}</td>
                    <td>{{$r->jenis_kelamin}}</td>
                    <td>{{$r->profesi}}</td>
                    <td>{{$r->alamat}}</td>
                   
                </tr>
            @endforeach
        </table>
        </div></div>
@endsection