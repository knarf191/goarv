@extends('layouts.application')
@section('content')
    <div style="width: 100%; height: 170px; background-image: url({{asset('images/banner2.png')}}); background-repeat: no-repeat;">
    </div>
    <div id="colorlib-project">
        <div class="container">
            <div class="row">
                <h3>NUESTROS PROYECTOS</h3>
                <hr>
                <br>
                <div class="col-md-12 animate-box" style="background-color: rgb(238,238,238); margin-bottom: 15px; border-radius: 15px;">
                    <div class="row" style="padding: 15px 0;">
                        <div class="col-md-3">
                            <img src="{{asset('images/person5.jpg')}}" alt="user" width="60%">
                        </div>
                        <div class="col-md-9" style="padding: 15px 15px;">
                            <div class="parag">
                                <h3>Ing. Fco. Javier Avelino Arias</h3>
                                <p>Con más de 10 años de experiencia en el ramo constructor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
