@extends('master')
@foreach ($articles as $article)
    @if ($article->module === 'articulos')
        @section('title', 'articulos')
    @elseif($article->module === 'exhibiciones')
        @section('title', 'exhibiciones')
    @elseif($article->module === 'campañas')
        @section('title', 'campañas')
    @endif
@endforeach
@section('content')
<div id="main_" class="row w-100   justify-content-center align-content-center m-0 h-100">
    @if ($countArt == 0)
        <h1 style="color: #fff;">Sin contenido por el momento.</h1>
    @else
        @foreach ($articles as $article)

            @if($article->module === 'exhibiciones')
                <div class="col-md-3 col-12 mb-3" style="height: 95%; border-radius:0 !important;" >
                    <a href="{{  url('seccion/'.$article->module.'/'.$article->slug) }}">
                        <img  src="{{ url('/multimedia'.$article->file_path.'/'.$article->slug.'/t_'.$article->file) }}" class="w-100" style="height: 95%;  background-size: 100% auto; background-repeat: no-repeat;">
                    </a>
                </div>
            @else
                <div class="col-md-4 col-12 mb-3" >
                    <a href="{{  url('seccion/'.$article->module.'/'.$article->slug) }}">
                        <div   class="cont-card-event" style="background-color: #000;    height: 250px;     padding: 0% !important;">

                            <img  src="{{ url('/multimedia'.$article->file_path.'/'.$article->slug.'/t_'.$article->file) }}" class="w-100" style="border-radius: 8px 8px 0 0; height: 70%;  background-size: 84%; background-repeat: no-repeat;">
                            <p class="m-0 text-center title_article" >{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p>

                        </div>

                    </a>
                </div>
            @endif
        @endforeach
    @endif
</div>
@endsection
