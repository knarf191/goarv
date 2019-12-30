@extends('layouts.application')
@section('content')
    <div id="colorlib-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-4 animate-box colorlib-heading animate-box">
                    <span class="sm">¡Bienvenido!</span>
                    <h2><span class="thin">Secrets of Success</span> <span class="thick">of Our Projects</span></h2>
                </div>
                <div class="col-md-4 col-md-pull-4 animate-box">
                    <div class="box text-center">
                        <span class="num">25</span>
                        <span class="yr">Years</span>
                        <span class="thin">Experience</span>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <p>Since 1980 Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
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
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                    <p><a href="{{route('goarv.proyectos')}}">View All Projects <i class="icon-arrow-right3"></i></a></p>
                </div>
                <div class="col-md-7 col-md-push-1">
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <div class="owl-carousel owl-carousel2 project-wrap">
                                <div class="item">
                                    <a href="images/building-1.jpg" class="project image-popup-link" style="background-image: url({{asset('images/building-1.jpg')}});">
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
                                    <a href="images/building-2.jpg" class="project image-popup-link" style="background-image: url({{asset('images/building-2.jpg')}});">
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
                                    <a href="images/building-3.jpg" class="project image-popup-link" style="background-image: url({{asset('images/building-3.jpg')}});">
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
                <div class="col-md-4 animate-box colorlib-heading animate-box">
                    <span class="sm">¿Qué hacemos?</span>
                    <h2><span class="thin">Nuestros</span> <span class="thick">Servicios</span></h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="wrap">
                            <div class="col-md-6 animate-box">
                                <div class="services">
                                            <span class="icon">
                                                <i class="flaticon-engineer"></i>
                                            </span>
                                    <div class="desc">
                                        <h3>General Constructing</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="services">
                                            <span class="icon">
                                                <i class="flaticon-engineering"></i>
                                            </span>
                                    <div class="desc">
                                        <h3>Building Modeling</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="services">
                                            <span class="icon">
                                                <i class="flaticon-skyline"></i>
                                            </span>
                                    <div class="desc">
                                        <h3>Design Build</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="services">
                                            <span class="icon">
                                                <i class="flaticon-crane"></i>
                                            </span>
                                    <div class="desc">
                                        <h3>Construction Services</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="services">
                                            <span class="icon">
                                                <i class="flaticon-sketch"></i>
                                            </span>
                                    <div class="desc">
                                        <h3>Pre-Construction Design</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="services">
                                            <span class="icon">
                                                <i class="flaticon-conveyor"></i>
                                            </span>
                                    <div class="desc">
                                        <h3>Construction Management</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                </div>
                <div class="col-md-8 col-md-pull-4">
                    <div class="row">
                        <div class="wrap-2">
                            <div class="col-md-6 text-center animate-box">
                                <div class="staff" class="staff-img" style="background-image: url({{asset('images/person1.jpg')}});">
                                    <a href="#" class="desc">
                                        <h3>John Miller</h3>
                                        <span>Lead Engineer</span>
                                        <div class="parag">
                                            <p>Even the all-powerful Pointing has no control about the blind texts</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <div class="staff" class="staff-img" style="background-image: url({{asset('images/person2.jpg')}});">
                                    <a href="#" class="desc">
                                        <h3>Brian Smith</h3>
                                        <span>Architect</span>
                                        <div class="parag">
                                            <p>Even the all-powerful Pointing has no control about the blind texts</p>
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
@stop
