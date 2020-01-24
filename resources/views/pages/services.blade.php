@extends('layouts.application')
@section('content')
    <div style="width: 100%; height: 170px; background-image: url({{asset('images/banner3.png')}}); background-repeat: no-repeat;">
    </div>
    <div id="colorlib-project">
        <div class="container">
            <h3>NUESTROS SERVICIOS</h3>
            <hr>
            <div id="colorlib-services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 animate-box">
                            <div class="services">
                                            <span class="icon">
                                                <i class="flaticon-conveyor"></i>
                                            </span>
                                <div class="desc">
                                    <h3>MANTENIMIENTO Y SOPORTE TÉCNICO</h3>
                                    <ul>
                                        <li>Dispensarios y sistema de monitoreos</li>
                                        <li>Imagen e instalaciones</li>
                                        <li>Hidroneumáticos </li>
                                        <li>Motobombas</li>
                                        <li>Asesoría técnica</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="services">
                                            <span class="icon">
                                                <i class="flaticon-engineer"></i>
                                            </span>
                                <div class="desc">
                                    <h3>CONSTRUCCIÓN</h3>
                                    <ul>
                                        <li>Terracerías</li>
                                        <li>Pavimentos</li>
                                        <li>Estructuras</li>
                                        <li>Obra civil</li>
                                        <li>Instalaciones electromecánicas</li>
                                        <li>Instalaciones hidráulicas y sanitarias</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="services">
                                            <span class="icon">
                                                <i class="flaticon-sketch"></i>
                                            </span>
                                <div class="desc">
                                    <h3>INGENIERIA Y DISEÑO</h3>
                                    <ul>
                                        <li>Estudios ambientales y trámites</li>
                                        <li>Topografía</li>
                                        <li>Diseños arquitectónicos</li>
                                        <li>Calculo estructural</li>
                                        <li>Ingeniería mecánica</li>
                                        <li>Ingeniería eléctrica</li>
                                        <li>Diseños hidráulico-sanitario</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="services">
                                            <span class="icon">
                                                <i class="flaticon-crane"></i>
                                            </span>
                                <div class="desc">
                                    <h3>SUMINISTROS</h3>
                                    <ul>
                                        <li>Material mecánico nacional</li>
                                        <li>Material de importación</li>
                                        <li>Refacciones</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
