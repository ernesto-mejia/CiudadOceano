@extends('admin.master')
@section('title', 'Galería')

@section('breadcrumb')

    <li class="breadcrumb-item">
        <a href="{{ url('/admin/kits') }}">
            <i class="fal fa-photo-video"></i>
            Galería
        </a>
    </li>

@endsection

@section('content')

    <div class="container-fluid">

        <div class="row">
            @if ($video == 0)
                <div class="col-md-12 mt-3">
                    <div class="panel shadow">
                        <div class="header">
                            <h2 class="title">
                                <i class="fal fa-file-edit"></i>
                                Editar descripción
                            </h2>
                        </div>
                        <div class="inside">
                            {!! Form::open(['url' => '/admin/video/add']) !!}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            {{ Form::label('description','Descripcion:') }}
                                            <div class="input-group-prepend">
                                                {!! Form::textarea('description', null, ['class' => 'form-control ', 'id' => 'editor']) !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {!! Form::submit('Actualizar Video', ['class' => 'btn btn-success mt16']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @else
            <div class="col-md-12 mt-3">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title">
                            <i class="fal fa-file-edit"></i>
                            Editar descripción
                        </h2>
                    </div>
                    <div class="inside">
                        {!! Form::open(['url' => '/admin/video/'.$cats->id.'/edit']) !!}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        {{ Form::label('description','Descripcion:') }}
                                        <div class="input-group-prepend">
                                            {!! Form::textarea('description', $cats->description, ['class' => 'form-control ', 'id' => 'editor']) !!}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            {!! Form::submit('Actualizar Video', ['class' => 'btn btn-success mt16']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            @endif


        </div>

    </div>

@stop

