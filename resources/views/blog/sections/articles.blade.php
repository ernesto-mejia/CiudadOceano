
@extends('master')
@section('title',  '' )

@section('content')
    <div id="" class="col-12">
        <div class="row  justify-content-center align-content-center">
            @foreach ($articles as $article)

                <div class="col-md-4 col-6 justify-content-center align-items-center mt-3" style="height: 35%; padding: 0 4%; margin-bottom: 3%;">

                    <a href="{{  url('seccion/'.$article->module.'/'.$article->slug) }}"  class=" h-100 w-100 justify-content-center">

                        <img  src="{{ url('/multimedia'.$article->file_path.'/t_'.$article->file) }}" class="w-100">

                        <p class="m-0 text-center" style=" font-family: 'Montserrat-Bold'; font-size:calc(1rem + 0.5vw); text-align: left;">{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p>

                        <p class="m-0 text-center" style="font-size:calc(0.5rem + 0.4vw); text-align: left;">{{ $article->date }}</p>

                    </a>

                </div>

            @endforeach
        </div>
    </div>
@endsection
