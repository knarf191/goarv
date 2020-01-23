@extends('layouts.application')
@section('content')
    <div style="width: 100%; height: 170px; background-image: url({{asset('images/banner2.png')}}); background-repeat: no-repeat;">
    </div>
    <div id="colorlib-project">
        <div class="container">
            <div class="row">
                <h3>NUESTROS CLIENTES</h3>
                <hr>
                <br>
                <div class="col-md-12 animate-box" style="background-color: rgb(238,238,218); margin-bottom: 15px; border-radius: 15px;">
                    <div class="row" style="padding: 15px 0;">
                        <div class="col-md-3">
                            <img src="{{asset('images/clientes/totalplay.png')}}" alt="user" width="60%">
                        </div>
                        <div class="col-md-9" style="padding: 15px 15px;">
                            <div class="parag">
                                <h3>TOTAL PLAY TELECOMUNICACIONES SA DE CV</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 animate-box" style="background-color: rgb(238,238,218); margin-bottom: 15px; border-radius: 15px;">
                    <div class="row" style="padding: 15px 0;">
                        <div class="col-md-3">
                            <img src="{{asset('images/clientes/marin.png')}}" alt="user" width="60%">
                        </div>
                        <div class="col-md-9" style="padding: 15px 15px;">
                            <div class="parag">
                                <h3>JOSE ARMIN MARIN SAURY</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <h3>TESTIMONIOS</h3>
                <blockquote>
                    <span><b>Andrew Field</b></span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </blockquote>
                <blockquote>
                    <span><b>Mark Bubble</b></span>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </blockquote>
                <blockquote>
                    <span><b>Adam Smith</b></span>
                    <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </blockquote>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 animate-box">
                    <form>
                        <div class="row">
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" class="form-control" placeholder="Introduce tu nombre">
                            </div>
                            <div class="form-group">
                                <label>Opinión:</label>
                                <textarea rows="4" class="form-control" placeholder="Danos tu opinión"></textarea>
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
