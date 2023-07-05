@extends('admin.master')
@section('title', 'Agregar Campaña')

@section('breadcrumb')

    <li class="breadcrumb-item">
        <a href="{{ url('/admin/campañas/1') }}">
            <i class="fal fa-newspaper"></i>
            Campaña
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/campaña/add/') }}">
            <i class="fas fa-plus"></i>
            Agregar campaña
        </a>
    </li>

@endsection

@section('content')

    <div class="container-fluid">


    </div>

@stop

@section('scripts')

    <script src="{{ asset('/libs/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    <script src="{{ asset('js/admin.js') }}"></script>

@endsection
