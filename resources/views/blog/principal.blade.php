@extends('master')

@section('content')

    <!--- Image Slider -->
        @include('blog.sections.carousel')

    <!--- Video -->
        @include('blog.sections.video')

    <!--- Justificacion -->
        @include('blog.sections.justify')

    <!--- Detalles
        include('blog.sections.details')
    -->
    <!--- Galeria
        include('blog.sections.galery')
    -->
@endsection

@section('scripts')
    <script src="{{ asset('js/video.js') }}"></script>
@endsection
