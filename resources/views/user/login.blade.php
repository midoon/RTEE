@extends('layout.master')

@section('css')
<link rel="stylesheet" href="css/login.css">
@endsection

@section('content')

<div class="global-container">
    
     <div class="card login-form ">
        
         <div class="card-body">
            @if(isset($error))
            <div class="row">
                <div class="alert alert-danger" role="alert">
                   {{$error}}
                </div>
            </div>
             @endif
             <h1 class="card-title text-center">Login</h1>
             <div class="card-text">
                <form class="mt-2    " method="post" action="/login">
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
                    <button class="w-100 btn btn-lg btn-primary btn-block mt-1" type="submit">Masuk Sebagai RT/RW</button>
                </form>
                <form action="/warga-login" class="mt-2 " method="post">
                    @csrf
                    <label for="">Akses Warga</label>
                    <button class="w-100 btn btn-lg btn-primary btn-block mt-2" type="submit">Masuk Sebagai Warga</button>
                </form>
             </div>
         </div>
        
        
    </div>
</div>
@endsection