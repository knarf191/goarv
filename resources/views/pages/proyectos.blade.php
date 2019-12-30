@extends('layouts.application')
@section('content')
    <div id="colorlib-project">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animate-box colorlib-heading animate-box">
                    <span class="sm">Trabajos</span>
                    <h2><span class="thin">Nuestros</span> <span class="thick">Proyectos Realizados</span></h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                    <p><a href="project.html">View All Projects <i class="icon-arrow-right3"></i></a></p>
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
@stop
