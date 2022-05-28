@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="/css/warga/war-fam.css">
@endsection

@section('content')
@include('partial.navbar-warga')
<div class="konten" style="margin-left: 260px">
    
<div class="container">
    <h3 class="mt-3">Daftar Keluarga</h3>
    <hr>

    <table class="table table-hover">
        <tr>
            <th>NO.KK</th>
            <th>KEPALA KELUARGA</th>
            <th>ANGGOTA KK</th>
        </tr>
        @foreach($family as $f)
            <tr>
                <td>{{$f->no_kk}}</td>
                <td>{{$f->kep_keluarga}}</td>
                <td>
                    <a href="/warga/family/{{$f->id}}/anggota" class="text-decoration-none text-dark">Anggota <i class='bx bxs-user-detail'></i></a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</div>
@endsection