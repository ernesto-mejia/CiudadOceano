@extends('admin.master')
@section('title', 'Editar Artículo')

@section('breadcrumb')

    <li class="breadcrumb-item">
        <a href="{{ url('/admin/articles/1') }}">
            <i class="fal fa-newspaper"></i>
            Artículos
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/article/'.$product->id.'edit ') }}">
            <i class="far fa-folder-open"></i>
            Editar notícia
        </a>
    </li>

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">
                <div class="panel shadow">

                    <div class="header">
                        <h2 class="title">
                            <i class="far fa-edit"></i>
                            Editar notícia
                        </h2>
                    </div>

                    <div class="inside">

                        {!! Form::open(['url' => '/admin/'.$product->module.'/edit', 'files' => true]) !!}

                            <div class="row" style="padding: 16px;">

                                <div class="col-md-9">
                                    {!! Form::label('name','Nombre:') !!}
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-keyboard"></i>
                                            </span>
                                        </div>
                                        {!! Form::text('name', $product->name, [ 'class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-3 .FechaN">
                                    {!! Form::label('date','Fecha:') !!}
                                    <div class="input-group" style="    height: 56%;">

                                        {!! Form::date('date', $product->date,['class' => 'date', 'style' => 'border: 1px solid #ced4da !important;']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row mt16">

                                <div class="col-md-9">
                                    <div class="container-fluid">
                                        <label for="name">Imagen destacada:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                {!! Form::file('file', ['class' => 'custom-file-input', 'id' => 'customFile']) !!}
                                                <label class="custom-file-label" for="customFile">Choose File</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="container-fluid">
                                        {!! Form::label('status ','Estado:') !!}
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                {!! Form::select('status', [ '0' => 'Borrador', '1' => 'Publicado'], $product->status, ['class' => 'custom-select']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            @for ($i=1 ; $i<=$product->sections; $i++)
                                <div name="{{$product->sections}}" class="row mt16" style="padding: 16px;" >
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            {{ Form::label('body_'.$i,'Descripcion:') }}
                                            <div class="input-group-prepend">
                                                {!! Form::textarea('body_'.$i, null, ['class' => 'form-control ', 'id' => 'editor_'.$i]) !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row mt16" style="padding: 16px;">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            {{ Form::label('video_'.$i,'Video:') }}
                                            <div class="input-group-prepend">
                                                {!! Form::textarea('video_'.$i, null, ['class' => 'form-control ', 'id' => 'video_'.$i]) !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endfor

                            {!! Form::submit('Guardar', ['class' => 'btn btn-success mt16']) !!}

                        {!! Form::close() !!}

                    </div>

                </div>
            </div>

            <div class="col-md-3 p-0">

                <div class="container-fluid">
                    <div class="panel shadow">

                        <div class="header">
                            <h2 class="title">
                                <i class="far fa-image "></i>
                                Imagen destacada
                            </h2>
                        </div>
                        <div class="inside">
                            <img src="{{ url('/multimedia'.$product->file_path.'/'.$product->file) }}" class="img-fluid">
                        </div>

                    </div>
                </div>

                @for ($i=1 ; $i<=$product->sections; $i++)
                    <div class="container-fluid">
                        <div class="panel shadow mt16">

                            <div class="header">
                                <h2 class="title">
                                    <i class="far fa-images"></i>
                                    Galeria {{$i}}
                                </h2>
                            </div>

                            <div class="inside product_gallery">

                                {!! Form::open(['url' => '/admin/'.$product->module.'/'.$product->id.'/gallery/add/'.$i, 'files' => true, 'id' => 'form_product_gallery_1']) !!}

                                    {!! Form::file('file', ['id' => 'product_file_image_1', 'accept' => 'image/*', 'style' => 'display:none;', 'required']) !!}

                                {!! Form::close() !!}

                                <div class="btn-submit">
                                    <a href="#" id="btn_product_file_image_1" onclick="Ngallery00()"><i class="fas fa-plus"></i></a>
                                </div>

                                <div class="tumbs">
                                    @foreach ($galerias as $ima)
                                        @if ($ima->after == $i)
                                            <div class="tumb">

                                                <a href="{{ url('/admin/article/'.$product->id.'/gallery/'.$ima->id.'/delete') }}" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>

                                                <img src="{{ url('/multimedia/'.$ima->file_path.'/t_'.$ima->file_name) }}" class="img-fluid" />
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                @endfor

            </div>

        </div>

    </div>

@stop

@section('scripts')

    <script src="{{ asset('/libs/ckeditor/ckeditor.js') }}"></script>
    @for ($i = 0; $i <= $product->sections; $i++)
        <script>

            CKEDITOR.replace( 'editor_{{$i}}');

        </script>
    @endfor



@endsection
