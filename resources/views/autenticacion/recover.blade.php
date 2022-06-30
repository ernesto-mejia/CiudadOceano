@extends('master')

@section('title', 'Recuperar Contraseña')

@section('content')

    @if (Session::has('message'))
        <div class="container">
            <div class="alert alert-{{ Session::get('typealert') }}" style="display: none;">
                {{ Session::get('message') }}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <script>
                    $('.alert').slideDown();
                    setTimeout(function() {
                        $('.alert').slideUp();
                    }, 3000);
                </script>
            </div>
        </div>
    @endif

    <div class="row justify-content-center align-items-center Height100 ">
        <div class="card-body justify-content-center align-items-center Height100" style="width: 100%;">

            <h1 class="Title_Login">¡Bienvenido a {{ config('app.name') }}!</h1>

            {!! Form::open(['url' => '/recover', 'class' => 'text-center']) !!}
            <div class="row justify-content-center align-content-center">
                <div class="col-md-6 col-12">
                    <label style="text-align: left !important; width: 100%;" for="email">Correo electrónico:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="far fa-envelope-open"></i>
                            </div>
                        </div>
                        {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
                <div class=" col-12">
                    {!! Form::submit('Recuperar contraseña', ['class' => 'btn btn-info mt16']) !!}
                </div>
            </div>


            {!! Form::close() !!}
            <div class="col-12 Title_Login">
                <p >¿No tienes cuenta? <a href="{{ route('register') }}" >Crear cuenta aquí</a></p>
                <a href="{{ url('/login') }}" >Ya tengo una cuenta, ingresar.</a>
            </div>
        </div>
    </div>

@stop
