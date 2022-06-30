@extends('admin.master')
@section('title', 'Artículos')

@section('breadcrumb')

    <li class="breadcrumb-item">
        <a href="{{ url('/admin/article') }}">
            <i class="fal fa-newspaper"></i>
            Artículos
        </a>
    </li>

@endsection

@section('content')

    <div class="container-fluid">

        <div class="panel shadow">

            <div class="header">
                <h2 class="title">
                    <i class="fal fa-newspaper"></i>
                    Artículos
                </h2>
                <ul>
                    @if (kvfj(Auth::user()->permissions, 'articulos_add'))
                        <li>
                            <a href="{{ url('/admin/articulo/add') }}">
                                <i class="fas fa-plus"></i> Agregar artículo
                            </a>
                        </li>
                    @endif

                    <li>
                        <a href="#">Filtrar <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="{{ url('/admin/articulos/1') }}">
                                    <i class="fas fa-globe-americas" style="color: green;"></i> Públicados
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/articulos/0') }}">
                                    <i class="fas fa-globe-americas" style="color: blue;"></i> No públicados
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/articulos/trash') }}">
                                    <i class="fas fa-trash" style="color: red;"></i> Papelera
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" id="btn_search">
                            <i class="fas fa-search"></i> Buscar
                        </a>
                    </li>
                </ul>
            </div>

            <div class="inside w-100" style="max-height: 400px; overflow: auto;">

                <div class="form_search" id="form_search">

                    <ul>
                        {!! Form::open(['url' => '/admin/article/search']) !!}
                            <div class="row">
                                <div class="col-md-8">
                                    {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su busqueda', 'required']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::select('status',  ['0' => 'No públicadas', '1' => 'Públicadas'], 0,['class' => 'form-control']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </ul>

                </div>

                <table class="table table-striped mt16">
                    <thead>
                        <tr>
                            <td style="text-align: center;">Imagen</td>
                            <td style="text-align: center;">Nombre</td>
                            <td>Estado</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articulos as $article)
                            <tr>
                                <td style="text-align: center;"  width="65">
                                    <img src="{{ url('/multimedia'.$article->file_path.'/t_'.$article->file) }}" width="65">
                                </td>
                                <td style="text-align: center;">{{ $article->name }} </td>
                                <td>
                                    @if ($article->status == '1')
                                        <i class="fas fa-globe-americas" style="color: green;"></i>
                                    @else
                                        <i class="fas fa-globe-americas" style="color: red;"></i>
                                    @endif
                                </td>
                                <td style="text-align: center;">
                                    <div class="opts">
                                        @if (kvfj(Auth::user()->permissions, $article->module.'_edit' ))
                                            @if ($article->deleted_at == null)
                                                <a href="{{ url('/admin/'.$article->module.'/'.$article->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar">
                                                    <i class="fas fa-edit" style="color: #ffc107;"></i>
                                                </a>
                                            @endif
                                        @endif
                                        @if (kvfj(Auth::user()->permissions, $article->module.'_delete'))
                                            @if ($article->deleted_at == null)
                                                <a href="#" data-action="delete" data-path="/admin/{{$article->module}}" data-object="{{ $article->id }}" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn_deleted" >
                                                    <i class="fas fa-trash-alt" style="color: red;"></i>
                                                </a>
                                            @else
                                                <a href="#" data-action="restore" data-path="/admin/{{$article->module}}" data-object="{{ $article->id }}" data-toggle="tooltip" data-placement="top" title="Restaurar articleo" class="btn_deleted">
                                                    <i class="fas fa-trash-restore" style="color: green;"></i>
                                                </a>
                                            @endif
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                         </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

@endsection
