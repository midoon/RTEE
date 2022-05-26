@extends('layout.master')

@section('content')
@include('partial.navbar-warga')
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
@endsection