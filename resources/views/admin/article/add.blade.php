@extends('admin.master')
@section('title', 'Agregar Artículo')

@section('breadcrumb')

    <li class="breadcrumb-item">
        <a href="{{ url('/admin/articles') }}">
            <i class="fal fa-newspaper"></i>
            Artículo
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/article/add/') }}">
            <i class="fas fa-plus"></i>
            Agregar artículo
        </a>
    </li>

@endsection

@section('content')

    <div class="container-fluid">

        <div class="panel shadow">

            <div class="header">
                <h2 class="title">
                    <i class="fas fa-plus"></i>
                    Agregar artículo
                </h2>
            </div>

            <div class="inside">

                {!! Form::open(['url' => '/admin/articulo/add', 'files' => true]) !!}

                    <div class="row" style="padding: 16px;">

                        <div class="col-md-5">
                            {!! Form::label('name','Nombre:') !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-keyboard"></i>
                                    </span>
                                </div>
                                {!! Form::text('name', null, [ 'class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-3 .FechaN">
                            {!! Form::label('date','Fecha:') !!}
                            <div class="input-group" style="    height: 56%;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                </div>
                                {!! Form::date('date', null,['class' => 'date', 'style' => 'border: 1px solid #ced4da !important;']) !!}
                            </div>
                        </div>


                        <div class="col-md-4">
                            <label for="name">Imagen destacada:</label>
                            <div class="custom-file">
                                {!! Form::file('file', ['class' => 'custom-file-input', 'id' => 'customFile']) !!}
                                <label class="custom-file-label" for="customFile">Choose File</label>
                            </div>
                        </div>

                    </div>

                    <div class="row mt16" style="padding: 16px;">
                        <div class="col-md-12">
                            <div class="form-group">

                                {{ Form::label('sections','Número de secciones:') }}
                                <div class="input-group-prepend">
                                    {!! Form::text('sections', null, ['class' => 'form-control ']) !!}
                                </div>

                            </div>
                        </div>
                    </div>


                    {!! Form::submit('Guardar', ['class' => 'btn btn-success mt16']) !!}

                {!! Form::close() !!}

            </div>

        </div>
    </div>

@stop

@section('scripts')

    <script src="{{ asset('/libs/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    <script src="{{ asset('js/admin.js') }}"></script>

@endsection
