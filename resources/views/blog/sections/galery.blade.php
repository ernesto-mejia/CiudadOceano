<div id="" class="col-12 " style="height: 920px !important;">
    <div class="row mb-2 justify-content-center align-content-center" style="height: 10%;">
       <h1> GALERÍA</h1>
    </div>
    <div class="row  justify-content-center align-content-center Pgallery" style="height: 30%;">
        <p>Como resultado de un programa de limpieza de playas , el fotógrafo Alfredo Blásquez ha documentado una colección de objetos de la vida cotidiana , que provienen de diferentes puntos del planeta . Las corrientes marítimas arrojan objetos a miles de kilometros de distancia dañando la flora y fauna del planeta, en gnereal.</p>
     </div>
     <div class="row ContenedorGallery justify-content-center align-content-center" >
        <div id="carouselExampleControls" class="carousel slide h-100 w-100" data-ride="carousel">
            <div class="carousel-inner h-100">
                @for($i = 0; $i < sizeof($galleries); $i++)
                    @if($i == 0)
                        <div class="carousel-item active h-100">
                            <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$galleries[$i]->file_path.'/'.$galleries[$i]->file) }}" alt="">
                        </div>
                    @else
                        <div class="carousel-item  h-100">
                            <img class="d-block w-100 h-100" src="{{ url('/multimedia'.$galleries[$i]->file_path.'/'.$galleries[$i]->file) }}" alt="">
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
</div>
