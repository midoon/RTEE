@extends('layout.master')

@section('content')
@include('partial.navbar')
<h1>list family</h1>
<div class="container">

    <table class="table table-hover">
        <tr>
            <th>NO.KK</th>
            <th>KEPALA KELUARGA</th>
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
            </tr>
        @endforeach
    </table>
    </div>
@endsection