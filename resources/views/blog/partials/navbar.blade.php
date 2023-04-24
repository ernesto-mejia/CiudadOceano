<nav class="navbar navbar-expand-md  " style="padding-top: 0; padding-bottom: 0 ">

    <a class="navbar-brand text-center d-inline-flex" href="{{url('/')}}">
        <img src="{{ url('multimedia'.$company[0]->file_path.'/'.$company[0]->file) }}" alt="" class="" >
        <p class="Logo">{!! html_entity_decode($company[0]->company_name, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}</p>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <i class="fad fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-4">
                <a style="text-align: center;" href="{{url('/seccion/articulos')}}" class="nav-link"><p class="m-0 pnav">Artículos</p></a>
            </li>
            <li class="nav-item ml-4">
                <a style="text-align: center;" href="{{url('/seccion/exposiciones')}}" class="nav-link"><p class="m-0 pnav">Exposiciones</p></a>
            </li>

            <li class="nav-item ml-4">
                <a style="text-align: center;" href="{{url('/seccion/campañas')}}" class="nav-link"><p class="m-0 pnav">Campañas</p></a>
            </li>
            @foreach ( $sections as $politica )
                <li class="nav-item ml-4">
                    <a style="text-align: center;" href="{{url('/politicas/'.$politica->slug)}}" class="nav-link"><p class="m-0 pnav">{{ $politica->name }}</p></a>
                </li>

            @endforeach
            <li class="nav-item ml-4 redes">
                <a target="_blank" href="https://es-la.facebook.com/ciudadoceano">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com/ciudadoceano/?hl=es-la">
                    <i  class="fab fa-instagram" ></i>
                </a>
                <a target="_blank" href="https://www.youtube.com/@ciudadoceano5975">
                    <i  class="fab fa-youtube" ></i>
                </a>

            </li>
            @auth
                <li class="nav-item  link-user dropdow ">
                    <a href="#" class="nav-link   dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Hola: {{ Auth::user()->name }} </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if ( Auth::user()->role == "1" )
                            <li>
                                <a href="{{ url('/admin') }}" data-toggle="tooltip" class="nav-link  us" data-placement="top" title="Administración">
                                    <i class="fas fa-chalkboard-teacher"></i> Administración
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                        @endif
                        <li>
                            <a href="{{ url('/logout') }}" class="nav-link " data-toggle="tooltip" data-placement="top" title="Salir">
                                <i class="fas fa-power-off">
                                    Cerrar sesión
                                </i>
                            </a>
                        </li>

                    </ul>
                </li>
            @endauth
        </ul>

    </div>

</nav>
