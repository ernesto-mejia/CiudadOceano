
@extends('master')

@section('title',  $post->name )

@section('content')
<div  class="col-12 justify-content-center align-items-center">
    <div id="noticias-car" class="row justify-content-center" style="padding: 6% 0 3% 0; height: auto;">

        <!-- Destacado -->

            <!-- TITULO NOTICIA -->
                <div id="mt-n" class="col-12 justify-content-center align-items-center Height5_2" style="padding: 0; margin-bottom: 10px; margin-top: 40px;">
                    <div id="" class="row justify-content-center align-items-center Height100">
                        <div class="col-lg-12 justify-content-center align-items-center Title_Show" style="height: 100% !important;">
                            <h3 style="text-align: center;">{!!  html_entity_decode($post->name, ENT_QUOTES | ENT_XML1, 'UTF-8')  !!}</h3>
                        </div>
                    </div>
                </div>
            <!-- iMAGEN DESTACADA -->
                <div  class="col-12 justify-content-center align-items-center Height70" style="padding: 0 20%; margin-bottom: 40px;">
                    <div id="" class="row justify-content-center align-items-center Height100" style="margin-bottom: 10px;">
                        <img src="{{ url('/multimedia/'.$post->file_path.'/'.$post->file) }}" class="d-block imagen_noticia w-100 h-100" alt="...">

                    </div>
                </div>

        <!-- Secccion1 -->
            <!-- DESCRIPCION -->
                <div  class="col-12 justify-content-center align-items-center " style="padding: 0; margin-bottom: 25px;  height: auto;">
                    <div id="" class="row justify-content-center align-items-center Height100" style="margin-bottom: 10px; padding: 0 20%; text-align: justify;" >

                        {!! html_entity_decode($post->body_1, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                    </div>
                </div>
            <!-- IMAGENES -->
                @for($i = 0; $i < sizeof($imagenes1); $i++)
                    @if($i == 0)
                        <div class="row ContenedorGallery justify-content-center align-content-center" >
                            <div id="carouselExampleControls" class="carousel slide h-100 w-100" data-ride="carousel">
                                <div class="carousel-inner h-100">
                                    @for($i = 0; $i < sizeof($imagenes1); $i++)
                                        @if($i == 0)
                                            <div class="carousel-item active h-100">
                                                <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$imagenes1[$i]->file_path.'/'.$imagenes1[$i]->file_name) }}" alt="">
                                            </div>
                                        @else
                                            <div class="carousel-item  h-100">
                                                <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$imagenes1[$i]->file_path.'/'.$imagenes1[$i]->file_name) }}" alt="">
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev" style="border: none;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next" style="border: none;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </button>
                            </div>
                        </div>
                    @endif
                @endfor
            <!--VIDEO -->
                @if ($post->video_1 != null )
                    <div  class="col-12 justify-content-center align-items-center vimeo" style="padding: 0; height:50%; min-height:300px; margin-bottom: 25px;">
                        <div id="" class="row justify-content-center align-items-center " style="height:300px; padding: 0 0; text-align: justify; " >

                            {!! html_entity_decode($post->video_1, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                        </div>
                    </div>
                @endif


        <!-- Secccion2 -->
            @if ($post->body_2 != null || $post->video_2 != null)

                <!-- DESCRIPCION2 -->
                    <div  class="col-12 justify-content-center align-items-center " style="padding: 0; height: auto; margin-bottom: 25px;">
                        <div id="" class="row justify-content-center align-items-center Height100" style="margin-bottom: 10px; padding: 0 20%; text-align: justify;" >

                            {!! html_entity_decode($post->body_2, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                        </div>
                    </div>
               <!-- IMAGENES -->
                    @for($i = 0; $i < sizeof($imagenes2); $i++)
                    @if($i == 0)
                        <div class="row ContenedorGallery justify-content-center align-content-center" >
                            <div id="carouselExampleControls" class="carousel slide h-100 w-100" data-ride="carousel">
                                <div class="carousel-inner h-100">
                                    @for($i = 0; $i < sizeof($imagenes1); $i++)
                                        @if($i == 0)
                                            <div class="carousel-item active h-100">
                                                <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$imagenes2[$i]->file_path.'/'.$imagenes2[$i]->file_name) }}" alt="">
                                            </div>
                                        @else
                                            <div class="carousel-item  h-100">
                                                <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$imagenes2[$i]->file_path.'/'.$imagenes2[$i]->file_name) }}" alt="">
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev" style="border: none;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next" style="border: none;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </button>
                            </div>
                        </div>
                    @endif
                @endfor

                <!--VIDEO2 -->

                    @if ($post->video_2 != null )
                        <div  class="col-12 justify-content-center align-items-center vimeo" style="padding: 0; height:50%;min-height:300px; margin-bottom: 25px;">
                            <div id="" class="row justify-content-center align-items-center" style="padding: 0 0; text-align: justify; height:300px;" >

                                {!! html_entity_decode($post->video_2, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                            </div>
                        </div>
                    @endif

            @endif

        <!-- Secccion3 -->
            @if ($post->body_3 != null ||   $post->video_3 != null)

                <!-- DESCRIPCION3 -->
                    <div  class="col-12 justify-content-center align-items-center " style="padding: 0; height: auto; margin-bottom: 25px;">
                        <div id="" class="row justify-content-center align-items-center Height100" style="padding: 0 20%; text-align: justify;" >

                            {!! html_entity_decode($post->body_3, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                        </div>
                    </div>
                    <!-- IMAGENES -->
                    @for($i = 0; $i < sizeof($imagenes3); $i++)
                    @if($i == 0)
                        <div class="row ContenedorGallery justify-content-center align-content-center" >
                            <div id="carouselExampleControls" class="carousel slide h-100 w-100" data-ride="carousel">
                                <div class="carousel-inner h-100">
                                    @for($i = 0; $i < sizeof($imagenes3); $i++)
                                        @if($i == 0)
                                            <div class="carousel-item active h-100">
                                                <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$imagenes3[$i]->file_path.'/'.$imagenes3[$i]->file_name) }}" alt="">
                                            </div>
                                        @else
                                            <div class="carousel-item  h-100">
                                                <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$imagenes3[$i]->file_path.'/'.$imagenes3[$i]->file_name) }}" alt="">
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev" style="border: none;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next" style="border: none;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    @endfor
                <!--VIDEO3 -->

                    @if ($post->video_3 != null )
                        <div  class="col-12 justify-content-center align-items-center vimeo" style="padding: 0; height:50%;min-height:300px; margin-bottom: 25px;">
                            <div id="" class="row justify-content-center align-items-center" style="height:300px; padding: 0 0%; text-align: justify; " >

                                {!! html_entity_decode($post->video_3, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                            </div>
                        </div>
                    @endif


            @endif

        <!-- Secccion4 -->
            @if ($post->body_4 != null || $post->video_4 != null)

                <!-- DESCRIPCION -->
                    <div  class="col-12 justify-content-center align-items-center " style="padding: 0; height: auto;">
                        <div id="" class="row justify-content-center align-items-center Height100" style="margin-bottom: 10px; padding: 0 20%; text-align: justify;" >

                            {!! html_entity_decode($post->body_4, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                        </div>
                    </div>
                <!-- IMAGENES -->
                    @for($i = 0; $i < sizeof($imagenes4); $i++)
                    @if($i == 0)
                        <div class="row ContenedorGallery justify-content-center align-content-center" >
                            <div id="carouselExampleControls" class="carousel slide h-100 w-100" data-ride="carousel">
                                <div class="carousel-inner h-100">
                                    @for($i = 0; $i < sizeof($imagenes4); $i++)
                                        @if($i == 0)
                                            <div class="carousel-item active h-100">
                                                <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$imagenes4[$i]->file_path.'/'.$imagenes4[$i]->file_name) }}" alt="">
                                            </div>
                                        @else
                                            <div class="carousel-item  h-100">
                                                <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$imagenes4[$i]->file_path.'/'.$imagenes4[$i]->file_name) }}" alt="">
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev" style="border: none;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next" style="border: none;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    @endfor
                <!--VIDEO -->
                    @if ($post->video_4 != null )
                        <div  class="col-12 justify-content-center align-items-center vimeo" style="padding: 0; height: 300px;">
                            <div id="" class="row justify-content-center align-items-center " style="height:300px; margin-bottom: 10px; padding: 0 0%; text-align: justify; " >

                                {!! html_entity_decode($post->video_4, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                            </div>
                        </div>
                    @endif

            @endif

        <!-- Secccion5 -->
            @if ($post->body_5 != null || $post->video_5 != null)
                <!-- DESCRIPCION5 -->

                    <div  class="col-12 justify-content-center align-items-center" style="padding: 0; height: auto; margin-bottom: 25px;">
                        <div id="" class="row justify-content-center align-items-center Height100" style="padding: 0 20%; text-align: justify;" >

                            {!! html_entity_decode($post->body_5, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                        </div>
                    </div>

            <!-- IMAGENES -->
                @for($i = 0; $i < sizeof($imagenes5); $i++)
                @if($i == 0)
                    <div class="row ContenedorGallery justify-content-center align-content-center" >
                        <div id="carouselExampleControls" class="carousel slide h-100 w-100" data-ride="carousel">
                            <div class="carousel-inner h-100">
                                @for($i = 0; $i < sizeof($imagenes5); $i++)
                                    @if($i == 0)
                                        <div class="carousel-item active h-100">
                                            <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$imagenes5[$i]->file_path.'/'.$imagenes5[$i]->file_name) }}" alt="">
                                        </div>
                                    @else
                                        <div class="carousel-item  h-100">
                                            <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$imagenes5[$i]->file_path.'/'.$imagenes5[$i]->file_name) }}" alt="">
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev" style="border: none;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next" style="border: none;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </button>
                        </div>
                    </div>
                @endif
                @endfor

                <!--VIDEO5 -->

                    @if ($post->video_5 != null )
                        <div  class="col-12 justify-content-center align-items-center vimeo" style="padding: 0;height: 50%; min-height: 300px; margin-bottom: 25px;">
                            <div id="" class="row justify-content-center align-items-center " style="height:300px; padding: 0 0%; text-align: justify; " >

                                {!! html_entity_decode($post->video_5, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}

                            </div>
                        </div>
                    @endif

            @endif
    </div>
</div>
@endsection
@section('scripts')
@endsection
