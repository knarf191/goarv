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
                            <a href="work.html">Nuestra Empresa</a>
                            <ul class="dropdown">
                                <li><a href="#">Historia</a></li>
                                <li><a href="#">Misión</a></li>
                                <li><a href="#">Visión</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Nuestros Servicios</a></li>
                        <li><a href="{{route('goarv.projects')}}">Proyectos</a></li>

                        <li><a href="about.html">Nuestro Equipo</a></li>
                        <li><a href="contact.html">Contáctanos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
