@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="/css/family/fam-list.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('content')
@include('partial.navbar')
<div class="konten" style="margin-left: 260px">
    
<div class="container">
    <h3 class="mt-3">Daftar Keluarga</h3>
    <hr>
    <table class="table table-hover">
        <tr>
            <th>NO.KK</th>
            <th>KEPALA KELUARGA</th>
            <th>AKSI</th>
            <th></th>
            <th>DETAIL</th>
        </tr>
        @foreach($family as $f)
            <tr>
                <td>{{$f->no_kk}}</td>
                <td>{{$f->kep_keluarga}}</td>
                <td>
                    <a href="/family/{{$f->id}}/edit" class="text-decoration-none text-success"><h5><i class='bx bxs-edit' ></i></h5></a>
                    
                </td>
                <td>
                    <form action="/family/{{$f->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Hapus" class="bg-danger text-white btn">
                    </form>
                </td>
                <td>
                    <a href="/family/{{$f->id}}/anggota" class="text-decoration-none text-dark">Anggota <i class='bx bxs-user-detail mt-2' style="font-size: 20px"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</div>
@endsection