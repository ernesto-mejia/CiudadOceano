@extends('master')

@section('content')

    <!--- Image Slider -->
        @include('blog.sections.carousel')

    <!--- Video -->
        @include('blog.sections.video')

    <!--- Valores -->
        @foreach ($sections as $politic)
            <div id="{{$politic->name}}" class="col-12 h-100 mt-2 mb-2" style="color: #fff !important;">

                <div class="row h-100  justify-content-center align-content-center valores-p">

                    <h1>
                        {{ $politic->name }}
                    </h1>

                {!! html_entity_decode($politic->description, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                </div>
            </div>
        @endforeach

@endsection

@section('scripts')
    <script src="{{ asset('js/video.js') }}"></script>
@endsection
