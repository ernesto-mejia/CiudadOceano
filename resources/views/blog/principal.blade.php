@extends('master')

@section('content')

    <!--- Image Slider -->
        @include('blog.sections.carousel')

    <!--- Video -->
        @include('blog.sections.video')

    <!--- Justificacion
        include('blog.sections.justify')
    -->
    <!--- Detalles
        include('blog.sections.details')
    -->
    <!--- Valores -->
    @foreach ($sections as $politic)
    <div id="{{$politic->name}}" class="col-12 h-100 mt-2 mb-2" style="color: #fff !important;">

        <div class="row h-100  justify-content-center align-content-center">

            </h1>
                {{ $politic->name }}
            <h1>

            <p class="text-justify p-3" style="color: #fff !important;">{!! html_entity_decode($politic->description, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}</p>

        </div>
    @endforeach


@endsection

@section('scripts')
    <script src="{{ asset('js/video.js') }}"></script>
@endsection
