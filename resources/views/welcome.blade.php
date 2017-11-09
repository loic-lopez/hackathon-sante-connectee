@extends('layouts.app')

@section('content')
    <!-- Banner Section -->
    <div id="home-banner" class="container-fluid no-padding banner-section home-banner">
        <!-- Container -->
        <div class="container">
            <div id="main-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="col-md-7 col-sm-7 no-padding">
                            <div class="banner-left">
                                <h3>Diab'Health</h3>
                                <p>Aujourd’hui ce que l’on veut éviter c’est que des personnes atteintes du diabète se retrouvent
                                    hospitalisés pour des causes évitables. Pour cela, nous avons décidé de créer Diab’Health,
                                    un personnal assistant pour les personnes atteintes de diabète.</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 no-padding">
                            <div class="banner-right">
                                <img src="/img/medecin.png" alt="banner-main"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Container /- -->

        <!-- Shape -->
        <div class="banner-shape container-fluid no-padding">
            <div class="col-md-6 col-sm-6 col-xs-6 shape-left no-padding">
                <div class="left-shape-blue">
                    <svg width="100%" height="100%">
                        <clipPath id="clipPolygon2" clipPathUnits="objectBoundingBox">
                            <polygon points="0 0, 0 100, 120 100, 0 0"></polygon>
                        </clipPath>
                    </svg>
                </div>
                <div class="left-shape">
                    <svg width="100%" height="100%">
                        <clipPath id="clipPolygon1" clipPathUnits="objectBoundingBox">
                            <polygon points="0 0, 0 100, 100 100, 0 0"></polygon>
                        </clipPath>
                    </svg>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 shape-right no-padding">
                <div class="right-shape-blue">
                    <svg width="100%" height="100%">
                        <clipPath id="clipPolygon3" clipPathUnits="objectBoundingBox">
                            <polygon points="1 0.2, 0 1, 0 0.835, 1 0"></polygon>
                        </clipPath>
                    </svg>
                </div>
                <div class="right-shape">
                    <svg width="100%" height="100%">
                        <clipPath id="clipPolygon4" clipPathUnits="objectBoundingBox">
                            <polygon points="1 0, 0 1, 100 100, 100 0"></polygon>
                        </clipPath>
                    </svg>
                </div>
            </div>
        </div><!-- Shape /- -->
    </div><!-- Banner Section /- -->

    <!-- Message Borad -->
    <div id="message-borad" class="container-fluid no-padding message-borad">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Emargency Case -->
                <div class="col-md-6 col-sm-6 emargency-case">
                    <h3 style="text-align: center; color: white">Deux fonctions principales :</h3>
                    <div class="col-md-6 message-block no-left-padding">
                        <h3>Monitoring</h3>
                        <p>Analyse de la glycémie par un algorithme pour conseiller le patient lorsqu’il doit s’injecter de l’insuline.</p>
                    </div>
                    <div class="col-md-6 message-block no-right-padding">
                        <h3>Fonction prédictive</h3>
                        <p>Un algorithme est mis en place avec une intelligence artificielle permettant de prévenir des crises d’hypo et d'hyperglycémie.</p>
                    </div>
                </div><!-- Emargency Case /- -->
                <!-- Opening Hours -->
                <div class="col-md-6 col-sm-6 opening-hours">
                    <h3 style="text-align: center; color: #0f89d1">Mise en situation :</h3>
                    <div class="col-md-6 message-block no-padding">
                        <h3>Monitoring</h3>
                        <ul>
                            <li style="text-transform: none">Un patient pourra consulter seul l’application web et s’injecter les doses exactes dont il a besoin.</li>
                            <li style="text-transform: none">Une personne aidante telle qu'une mère pourra suivre son enfant et le responsabiliser dans la gestion de son diabète.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 message-block">
                        <h3>Fonction prédictive</h3>
                        <ul>
                            <li style="text-transform: none">Désengorger les urgences et diminuer les coûts de prise en charge.</li>
                            <li style="text-transform: none">Le médecin traitant et l'aidant du patient pourra être informé
                                de l’état de son patient constamment et pourra le convoquer avant que son état soit critique.</li>
                        </ul>
                    </div>
                </div><!-- Opening Hours /- -->
            </div>
        </div><!-- Container /- -->
    </div><!-- Message Borad /- -->
@endsection