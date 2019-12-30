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
                        <li><a href="{{route('goarv.proyectos')}}">Proyectos</a></li>

                        <li><a href="about.html">Nuestro Equipo</a></li>
                        <li><a href="contact.html">Contáctanos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url({{asset('images/img_bg_1.jpg')}});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Providing all Kinds of Construction Services</h2>
                                <h1>Constructing Spaces For You</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{asset('images/img_bg_2.jpg')}});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Building Your Solid</h2>
                                <h1>High Class Building</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{asset('images/img_bg_3.jpg')}});">
                <div class="overlay"></div>
                <div class="container-fluids">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>We Design All Kinds of Buildings</h2>
                                <h1>We Build Buildings Professionally</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</aside>
