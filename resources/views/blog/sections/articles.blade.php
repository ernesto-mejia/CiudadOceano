
@extends('master')
@section('title',  '' )

@section('content')
    <div id="Articles" class="col-12 h-100">
        <div class="row h-100  justify-content-center align-content-center">
            @if ($countArt == 0)
                <h1>Sin contenido por el momento.</h1>
            @else
                @foreach ($articles as $article)

                    <div class="col-md-4 col-6  cont-card-event" >

                        <a href="{{  url('seccion/'.$article->module.'/'.$article->slug) }}"  class=" h-100 w-100 justify-content-center">

                            <img  src="{{ url('/multimedia'.$article->file_path.'/t_'.$article->file) }}" class="w-100">

                            <p class="m-0 text-center" style=" font-family: 'Montserrat-Bold'; font-size:calc(1rem + 0.5vw); text-align: left;">{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p>

                            <p class="m-0 text-center" style="font-size:calc(0.5rem + 0.4vw); text-align: left;">{{ $article->date }}</p>

                        </a>

                    </div>

                @endforeach
            @endif
        </div>
    </div>
@endsection
