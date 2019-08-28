@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="figuretion col m8 s12" >
            <div class="box">
                <img src="img/img_serpro5.jpg">
            </div>
        </div>
        <div class="col m4 s12" style=" margin-top:6%;" >
            <div class="box">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" >
                    <div class="col s12" style="text-align: center;">
                        <img class="m4" src="img/serpro5.jpg" alt="" width="72" height="72">
                        <h3>SUPGA </h3>
                        <h6>GERIR CONTRATAÇÕES</h6>
                    </div>
                    @csrf
                    <div class=" row">
                        <div class="col s10 offset-s1 ">
                            <div class="input-field">

                                <input id="email" type="email"  class="validate" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <label data-error="Invalid" data-success="Valid" for="email">Email</label>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class=" row">


                        <div class="col s10 offset-s1 ">
                            <div class="input-field">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <label for="password">Password</label>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class=" row">
                        <div class="col s4 offset-s4 ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                       <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class=" row ">
                        <div style="text-align: center">
                           
                            <button type="submit" class="btn  waves-effect waves-light" >
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    <div class=" row ">
                        <div style="text-align: center">
                            <a  class="btn s4 waves-effect waves-light" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                </form>



            </div>       
        </div>
    </div>
</div>



@endsection
