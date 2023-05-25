@extends('master')
@section('title',  '' )

@section('content')
<div class="row w-100 h-100  justify-content-center align-content-center m-0">
    @if ($countArt == 0)
        <h1 style="color: #fff;">Sin contenido por el momento.</h1>
    @else
        @foreach ($articles as $article)

            <div class="col-md-4 col-12" >
                <a href="{{  url('seccion/'.$article->module.'/'.$article->slug) }}">
                <div   class="cont-card-event" style="background-color: #000;    height: 250px;     padding: 0% !important;">

                    <img  src="{{ url('/multimedia'.$article->file_path.'/'.$article->slug.'/t_'.$article->file) }}" class="w-100" style="border-radius: 8px 8px 0 0; height: 70%;  background-size: 84%; background-repeat: no-repeat;">

                    <p class="m-0 text-center title_article" >{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p>

                    {{-- <p class="m-0 text-center" style="color: #fff; font-size:calc(0.5rem + 0.4vw); text-align: left;">{{ $article->date }}</p> --}}

                </div>

            </a>
            </div>

        @endforeach
    @endif
</div>
@endsection
