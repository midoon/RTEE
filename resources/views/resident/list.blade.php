@extends('layout.master')

@section('content')
<div class="container">

<table class="table table-hover">
    <tr>
        <th>NO.KK</th>
        <th>NIK</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>PROFESI</th>
        <th>ALAMAT</th>
        <th>AKSI</th>
    </tr>
    @foreach($resident as $r)
        <tr>
            <td>{{$r->no_kk}}</td>
            <td>{{$r->nik}}</td>
            <td>{{$r->nama}}{{($r->kepkap==$r->nama)?  "*" :  ""}}</td>
            <td>{{$r->jenis_kelamin}}</td>
            <td>{{$r->profesi}}</td>
            <td>{{$r->alamat}}</td>
            <td>
                <a href="/resident/{{$r->id}}/edit">Edit</a>
                <form action="/resident/{{$r->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>
</div>
@endsection