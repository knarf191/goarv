<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo"><a href="{{route('goarv.home')}}"><img src="{{asset('images/goarv.png')}}" width="200%"></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="{{route('goarv.home')}}">Home</a></li>
                        <li class="has-dropdown">
                            <a href="{{route('goarv.company')}}">Empresa</a>
                        </li>
                        <li><a href="{{route('goarv.services')}}">Servicios</a></li>
                        <li><a href="{{route('goarv.team')}}">Nuestro Equipo</a></li>
                        <li><a href="{{route('goarv.clients')}}">Clientes</a></li>
                        <li><a href="{{route('goarv.projects')}}">Proyectos</a></li>
                        <li><a href="{{route('goarv.contact')}}">Contáctanos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
