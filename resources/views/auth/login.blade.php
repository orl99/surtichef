@extends('layouts.general')

@section('content')
<div class="container-fluid">
    <div class="row text-center" style="padding-top:250px;">
        <div class="col-12 px-5">
            <img class="img-fluid" src="{{asset ('img/logo.png') }}">
            <p style="font-size:25px;color:white;">Tus pedidos en linea</p>
        </div>
         <form method="POST" class="col-12" action="{{ route('login') }}">
            @csrf
        <div class="col-12" style="padding-top:180px;">
        <div class="col-12 px-5 input-line">
             <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email"><i class="fas fa-user"></i> Su E-mail</label>
        </div>
        <div class="col-12 px-5 input-line">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password"><i class="fas fa-lock"></i> Su Contrasena</label>

        </div>
        <div class="col-12">
             <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width:30px;height:30px;">

                                    <label class="" for="remember" style="font-size:35px;color:white;">
                                        {{ __('Remember Me') }}
                                    </label>
        </div>
        <div class="col-10 offset-1 px-5 mt-5">
            <button type="submit" class="bthe-log btn-block">Entrar</button>
        </div>
        {{-- <div class="col-10 offset-1 px-5 mt-4">
            <a class="bthe-reg btn-block" href="">Registrarte</a>
        </div> --}}
        {{-- <div class="col-12">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}" style="color:white;font-size:30px;">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif</div> --}}
        </div>
        </form>
    </div>
</div>
@endsection






<style type="text/css">
.bthe-log{border-radius:50px 50px 50px 50px;padding-top:20px;padding-bottom:20px;width:100%;background-color:white;font-size:3em;color:#444;}
.bthe-reg{border-radius:50px 50px 50px 50px;padding-top:20px;padding-bottom:20px;width:100%;border:2px solid white;font-size:3em;color:white;}
/*inputs unidental para todos los formularios */
.input-line input, textarea, select{
width:100%!important;
padding:10px 5!important;
font-size:45px!important;
margin-bottom:30px!important;
border:none!important;
border-bottom:4px solid white!important;
outline:none!important;
background-color:transparent!important;
resize:none!important;
border-radius: 10px;


}
.input-line{
    margin-bottom: 20px;
}

.input-line label{

position:absolute!important;
top:0!important;
left:50px!important;
padding:10px 5!important;
font-size:45px!important;
color:#fff!important;
pointer-events:none!important;
transition:.5s!important;


 }
  .input-line input ~ label,
 .input-line input ~ label {
top:-50px!important;
left:0!important;
color:white!important;
font-size:25px!important;

 }
 .input-line textarea ~ label,
 .input-line textarea ~ label{
top:-50px!important;
left:0!important;
color:white!important;
font-size:25px!important;

 }
.input-line select:focus ~ label,
.input-line select ~ label{
top:-50px!important;
left:0!important;
color:white!important;
font-size:25px!important;

 }

</style>
