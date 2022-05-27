@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-lg-6">
        @if(isset($error))
        <div class="row">
            <div class="alert alert-danger" role="alert">
               {{$error}}
            </div>
        </div>
         @endif
    
         <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/login">
            <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
            @csrf
            <div class="form-floating mb-3">
                <input name="user" type="text" class="form-control" id="user" placeholder="id">
                <label for="user">User</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="password" placeholder="password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In RT/RW</button>
        </form>
        <form action="/warga-login" class="p-4 p-md-5 border rounded-3 bg-light" method="post">
            @csrf
            <button class="w-100 btn btn-lg btn-primary" type="submit">MASUK SEBAGAI WARGA</button>
        </form>
    </div>
</div>
@endsection