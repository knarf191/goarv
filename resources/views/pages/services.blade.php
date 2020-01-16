@extends('layouts.application')
@section('content')
    <div style="width: 100%; height: 170px; background-image: url({{asset('images/banner3.png')}}); background-repeat: no-repeat;">
    </div>
    <div id="colorlib-project">
        <div class="container">
            <h3>NUESTROS SERVICIOS</h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-5 service-box animate-box">
                            <h4><b>Mantenimiento y soporte técnico</b></h4>
                        </div>
                        <div class="col-md-5 service-box animate-box">
                            <h4><b>Ingeniería y diseño</b></h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-5 service-box animate-box">
                            <h4><b>Construcción</b></h4>

                        </div>
                        <div class="col-md-5 service-box animate-box">
                            <h4><b>Suministros</b></h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
