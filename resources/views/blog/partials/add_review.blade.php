
@foreach ($expos as $expo)
    <div class="row d-flex w-100 justify-content-center align-items-center" >
        <h1 class="text-center w-100 mt-3" style="color: #fff;">{{$expo->name}}</h1>
        <div class="content d-flex justify-content-center align-items-center cont-review" style="width: 70%; overflow: auto;">

            <div class="col-md-4 col-12 mb-3" >
                <div   class="cont-card-event" style="background-color: #fff;  padding: 0% !important;">
                    {{-- <p class="m-0 text-center title_article" >{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p> --}}
                    <p><span></span></p>
                    <p class="p-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti dolor odit. Tempore deserunt, nobis itaque molestiae aut corrupti eligendi maxime incidunt aspernatur ex recusandae culpa similique ea rem nulla!</p>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3" >
                <div   class="cont-card-event" style="background-color: #fff;  padding: 0% !important;">
                    {{-- <p class="m-0 text-center title_article" >{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p> --}}
                    <p><span></span></p>
                    <p class="p-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti dolor odit. Tempore deserunt, nobis itaque molestiae aut corrupti eligendi maxime incidunt aspernatur ex recusandae culpa similique ea rem nulla!</p>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3" >
                <div   class="cont-card-event" style="background-color: #fff;  padding: 0% !important;">
                    {{-- <p class="m-0 text-center title_article" >{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p> --}}
                    <p><span></span></p>
                    <p class="p-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti dolor odit. Tempore deserunt, nobis itaque molestiae aut corrupti eligendi maxime incidunt aspernatur ex recusandae culpa similique ea rem nulla!</p>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3" >
                <div   class="cont-card-event" style="background-color: #fff;  padding: 0% !important;">
                    {{-- <p class="m-0 text-center title_article" >{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p> --}}
                    <p><span></span></p>
                    <p class="p-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti dolor odit. Tempore deserunt, nobis itaque molestiae aut corrupti eligendi maxime incidunt aspernatur ex recusandae culpa similique ea rem nulla!</p>
                </div>
            </div>

            <div class="col-md-4 col-12 mb-3" >
                <div   class="cont-card-event" style="background-color: #fff;  padding: 0% !important;">
                    {{-- <p class="m-0 text-center title_article" >{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p> --}}
                    <p><span></span></p>
                    <p class="p-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti dolor odit. Tempore deserunt, nobis itaque molestiae aut corrupti eligendi maxime incidunt aspernatur ex recusandae culpa similique ea rem nulla!</p>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3" >
                <div   class="cont-card-event" style="background-color: #fff;  padding: 0% !important;">
                    {{-- <p class="m-0 text-center title_article" >{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p> --}}
                    <p><span></span></p>
                    <p class="p-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti dolor odit. Tempore deserunt, nobis itaque molestiae aut corrupti eligendi maxime incidunt aspernatur ex recusandae culpa similique ea rem nulla!</p>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3" >
                <div   class="cont-card-event" style="background-color: #fff;  padding: 0% !important;">
                    {{-- <p class="m-0 text-center title_article" >{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p> --}}
                    <p><span></span></p>
                    <p class="p-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti dolor odit. Tempore deserunt, nobis itaque molestiae aut corrupti eligendi maxime incidunt aspernatur ex recusandae culpa similique ea rem nulla!</p>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3" >
                <div   class="cont-card-event" style="background-color: #fff;  padding: 0% !important;">
                    {{-- <p class="m-0 text-center title_article" >{{ html_entity_decode($article->name, ENT_QUOTES | ENT_XML1, 'UTF-8') }}</p> --}}
                    <p><span></span></p>
                    <p class="p-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti dolor odit. Tempore deserunt, nobis itaque molestiae aut corrupti eligendi maxime incidunt aspernatur ex recusandae culpa similique ea rem nulla!</p>
                </div>
            </div>

        </div>
    </div>
@endforeach
@section('scripts')
    <script>
        $(document).ready(function(){
            $('.cont-review').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            });
            $('.slick-arrow').addClass('d-none');
        });
    </script>
@endsection
