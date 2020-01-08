@extends('layouts.application')
@section('content')
    <div style="width: 100%; height: 170px; background-image: url({{asset('images/banner2.png')}}); background-repeat: no-repeat;">
    </div>
    <div id="colorlib-project">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>QUIÉNES SOMOS</h3>
                    <hr>
                    <p>
                        SOMOS UNA EMPRESA JOVEN DEDICADA AL DISEÑO, CONSTRUCCION,
                        SOPORTE TECNICO, MANTENIMIENTO Y SUMINISTROS DE ESTACIONES DE
                        SERVICIO TIPO GASOLINERA CON PERSONAL  DE EXPERIENCIA
                        ALTAMENTE CALIFICADOS Y TECNICOS CERTIFICADOS.
                    </p>
                </div>
                <div class="col-md-12" align="center">
                    <img src="{{asset('images/team.png')}}" style="padding: 15px 0 25px 0; width: 50%;" align="center">
                </div>
                <div class="col-md-12">
                    <h3>MISIÓN</h3>
                    <hr>
                    <p>
                        ATENDER A NUESTROS CLIENTES, CON TIEMPO OPORTUNO,
                        OFRECIENDO CALIDAD EN EL SERVICIO Y PRECIOS JUSTOS, ACTUANDO
                        CON  ÉTICA Y RESPONSABILIDAD.
                    </p>
                    <br>
                    <h3>VISIÓN</h3>
                    <hr>
                    <p>
                        SER UNA EMPRESA LIDER EN SERVICIOS DE CALIDAD, MEJORANDO LOS
                        ESTANDARES ESTABLECIDOS, ATRAVES DE LA INNOVACION DE
                        TECNOLOGIAS Y CAPACITACIONES CONSTANTES.
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
@stop
