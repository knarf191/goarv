@extends('layouts.application')
@section('content')
    <div style="width: 100%; height: 170px; background-image: url({{asset('images/banner3.png')}}); background-repeat: no-repeat;">
    </div>
    <div id="colorlib-project">
        <div class="container">
            <div class="row">
                <h3>CONTÁCTANOS</h3>
                <hr>
                <br>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <p><i class="icon-phone-hang-up" style="padding: 0 5px;"></i> 921 16 34 393</p>
                        </div>
                        <div class="col-md-12">
                            <p><i class="icon-map-pin" style="padding: 0 5px;"></i> COL. RANCHO ALEGRE II, PRIVADA DE LAURELES 20-B, CP. 96558, COATZACOALCOS VER</p>
                        </div>
                        <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.5792344651027!2d-94.47484968574815!3d18.137211885521058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85e9838260db0c31%3A0x561cc3676eeab28d!2sLaureles%2020B%2C%20Rancho%20Alegre%20II%2C%2096558%20Coatzacoalcos%2C%20Ver.!5e0!3m2!1ses-419!2smx!4v1578466727509!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <form>
                        <div class="row">
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" class="form-control" placeholder="Introduce tu nombre">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Introduce tu email">
                            </div>
                            <div class="form-group">
                                <label>Teléfono:</label>
                                <input type="text" class="form-control" placeholder="Introduce tu teléfono">
                            </div>
                            <div class="form-group">
                                <label>Dirección:</label>
                                <input type="text" class="form-control" placeholder="Introduce tu Dirección">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
