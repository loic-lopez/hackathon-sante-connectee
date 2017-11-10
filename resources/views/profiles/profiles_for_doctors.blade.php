@extends('layouts.app')

@section('content')

    <div class="page-banner team-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <h3>Profil</h3>
            <p>Bienvenue le profil de, <b><font color="#adff2f">{{ $user->username }}</font></b>.</p>
            <p>Vous pouvez accéder ici à toutes les informations personnelles de ce patient.</p>
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
        </div><!-- Shape -->
    </div><!-- Page Banner /- -->

    <!-- Team Section -->
    <div id="team-section" class="container-fluid no-paddding team-section">
        <div class="container">
            <div class="section-header">
                <h3>Informations du patient</h3>
                <p>Prénom: <b>{{ $user->firstname }}</b></p>
                <p>Nom: <b>{{ $user->lastname }}</b></p>
                <p>Adresse email: <b>{{ $user->email }}</b></p>
                <p>Numéro de téléphone: <b>{{ $user->phone }}</b></p>

                <p>Courbe de glycémie du patient : {{ $user->firstname }} {{ $user->lastname }}<br>
                    <img src="https://www.medtronicdiabete.ca/sites/canada/www.medtronicdiabete.ca/files/styles/popup_full/public/enlite_graph_lrg.png?itok=XPQPgNkh"></p>

            </div>
        </div>
    </div><!-- Team Section -->
@endsection