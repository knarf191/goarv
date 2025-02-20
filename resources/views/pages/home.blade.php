@extends('layouts.application')
@section('content')
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
    <div id="colorlib-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6 animate-box colorlib-heading animate-box">
                    <span class="sm"><b>¡Bienvenido!</b></span>
                    <p style="text-align: justify">Gracias por visitar nuestra nueva página web. Aquí podrás encontrar toda la información que necesites sobre nuestra empresa y sobre los servicios que ofrecemos.</p>
                    <p style="text-align: justify">Somos una empresa constructora fuertemente implicada en el crecimiento y el desarrollo social, mediante la supervisión y ejecución de proyectos de construcción reconocidos por su calidad  y respeto por el medio ambiente.</p>
                </div>
                <div class="col-md-6 col-md-pull-6 animate-box">
                    <div class="box text-center">
                        <span class="num">10</span>
                        <span class="yr">Años</span>
                        <span class="thin">Experiencia</span>
                    </div>
                </div>
                <div class="col-md-4 animate-box">

                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-project">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animate-box colorlib-heading animate-box">
                    <span class="sm">Trabajos</span>
                    <h2><span class="thin">Nuestros</span> <span class="thick">Proyectos Realizados</span></h2>
                    <p>Contamos con una gran trayectoria en el ramo constructor, respaldada por nuestras obras y construcciones.</p>
                    <p><a href="{{route('goarv.projects')}}">Mira todos nuestros proyectos<i class="icon-arrow-right3"></i></a></p>
                </div>
                <div class="col-md-7 col-md-push-1">
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <div class="owl-carousel owl-carousel2 project-wrap">
                                <div class="item">
                                    <a href="{{asset('images/building-1.jpg')}}" class="project image-popup-link" style="background-image: url({{asset('images/building-1.jpg')}});">
                                        <div class="desc-t">
                                            <div class="desc-tc">
                                                <div class="desc">
                                                    <h3><span><small>1</small></span> California Mega Mall</h3>
                                                    <p>Even the all-powerful Pointing has no control</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{asset('images/building-2.jpg')}}" class="project image-popup-link" style="background-image: url({{asset('images/building-2.jpg')}});">
                                        <div class="desc-t">
                                            <div class="desc-tc">
                                                <div class="desc">
                                                    <h3><span><small>2</small></span> Commercial Building</h3>
                                                    <p>Even the all-powerful Pointing has no control</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{asset('images/building-3.jpg')}}" class="project image-popup-link" style="background-image: url({{asset('images/building-3.jpg')}});">
                                        <div class="desc-t">
                                            <div class="desc-tc">
                                                <div class="desc">
                                                    <h3><span><small>3</small></span> Miami Private Apartment</h3>
                                                    <p>Even the all-powerful Pointing has no control</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{asset('images/cover_img_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-skyline"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Projects</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-engineer"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Employees</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Constructor</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-worker"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Partners</span>
                </div>
            </div>
        </div>
    </div>-->

    <div id="colorlib-services" class="colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box colorlib-heading animate-box">
                    <span class="sm">¿Qué hacemos?</span>
                    <h2><span class="thin">Nuestros</span> <span class="thick">Servicios</span></h2>
                    <p style="text-align: justify">Mediante este Portafolio de Servicios ponemos a disposición de clientes potenciales nuestra
                        experiencia técnica en el manejo y dirección de obras arquitectónicas y civiles, orientada a lograr el máximo beneficio con una
                        administración óptima de los recursos y al mínimo costo.</p>
                    <p style="text-align: justify">Nuestro objetivo, como el de las grandes empresas del sector constructor, va más allá de ofrecer un buen servicio,
                        es el compromiso permanente en la búsqueda constante de nuevas alternativas para su prestación, buscando de esta manera,
                        alcanzar un nivel de competitividad acorde con las exigencias del cliente actual, en cuanto a la calidad del servicio que le garantice la rentabilidad de su inversión.</p>
                    <p><a href="{{route('goarv.services')}}">Conoce todos nuestros servicios.<i class="icon-arrow-right3"></i></a></p>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-8 animate-box colorlib-heading animate-box">
                    <span class="sm">Equipo</span>
                    <h2><span class="thin">Nuestros</span> <span class="thick">Ingenieros</span></h2>
                    <p>El equipo de profesionales de GOARV está integrado por personas con un alto nivel de conocimientos en todas las áreas en las que nos desempeñamos.</p>
                    <p><a href="{{route('goarv.team')}}"> Conoce más de nuestro equipo <i class="icon-arrow-right3"></i></a></p>
                </div>
                <div class="col-md-8 col-md-pull-4">
                    <div class="row">
                        <div class="wrap-2">
                            <div class="col-md-6 text-center animate-box">
                                <div class="staff" class="staff-img" style="background-image: url({{asset('images/person5.jpg')}});">
                                    <a href="#" class="desc">
                                        <h3>Ing. Fco. Javier Avelino Arias</h3>
                                        <p>Ingenieria y Construcción</p>
                                        <div class="parag">
                                            <p>Con más de 10 años de experiencia en el ramo constructor</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <div class="staff" class="staff-img" style="background-image: url({{asset('images/person2.jpg')}});">
                                    <a href="#" class="desc">
                                        <h3>Ing. Juan José Villasis Jimenez</h3>
                                        <p>Soporte y Mantto.</p>
                                        <div class="parag">
                                            <p>Experto en mantenimiento y soporte a equipos y edificaciones.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-testimony" class="colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animate-box colorlib-heading animate-box">
                    <span class="sm">Testimonial</span>
                    <h2><span class="thin">Que dicen</span> <span class="thick">Nuestros Clentes</span></h2>
                </div>
                <div class="col-md-7 col-md-push-1">
                    <div class="row animate-box">
                        <span class="icon"><i class="icon-quotes-left"></i></span>
                        <div class="owl-carousel1">
                            <div class="item">
                                <div class="testimony-slide active">
                                    <div class="testimony-wrap">
                                        <figure>
                                            <img src="images/person1.jpg" alt="user">
                                        </figure>
                                        <blockquote>
                                            <span>Andrew Field</span>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active">
                                    <div class="testimony-wrap">
                                        <figure>
                                            <img src="images/person2.jpg" alt="user">
                                        </figure>
                                        <blockquote>
                                            <span>Mark Bubble</span>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active">
                                    <div class="testimony-wrap">
                                        <figure>
                                            <img src="images/person3.jpg" alt="user">
                                        </figure>
                                        <blockquote>
                                            <span>Adam Smith</span>
                                            <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-about" style="padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box colorlib-heading animate-box">
                    <h2><span class="thick">Nuestros Proveedores</span></h2>
                </div>
            </div>
            <div class="row">

                <div id="client-carousel" class="client-slider owl-carousel">
                    <div class="single-brand">
                        <img src="{{asset('images/proveedores/1.jpg')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('images/proveedores/2.jpg')}}" alt="" style="width: 50%;">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('images/proveedores/3.jpg')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('images/proveedores/4.jpg')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('images/proveedores/5.jpg')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('images/proveedores/6.jpg')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('images/proveedores/7.jpg')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('images/proveedores/8.jpg')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('images/proveedores/9.jpg')}}" alt="" style="width: 50%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
