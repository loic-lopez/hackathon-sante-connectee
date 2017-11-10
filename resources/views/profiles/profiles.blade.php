@extends('layouts.app')

@section('content')

    <div class="page-banner team-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <h3>Profil</h3>
            <p>Bienvenue sur votre profil, <b><font color="#adff2f">{{ Auth::user()->username }}</font></b>.</p>
            <p>Vous pouvez accéder ici à toutes vos informations personnelles.</p>
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
                <h3>Informations personnelles</h3>
                <p>Prénom: <b>{{ Auth::user()->firstname }}</b></p>
                <p>Nom: <b>{{ Auth::user()->lastname }}</b></p>
                <p>Type de compte: <b>{{ Auth::user()->account_type }}</b></p>
                <p>Adresse email: <b>{{ Auth::user()->email }}</b></p>
                <p>Numéro de téléphone: <b>{{ Auth::user()->phone }}</b></p>

                @if( Auth::user()->account_type == 'patient')
                    <p>Votre courbe de glycémie:<br>
                        <img src="https://www.medtronicdiabete.ca/sites/canada/www.medtronicdiabete.ca/files/styles/popup_full/public/enlite_graph_lrg.png?itok=XPQPgNkh"></p>

                    <p>Prévenir votre médecin traitant d'un problème:<br>
                        <label>
                            <input size="30" placeholder="mail de votre médecin" value="{{ Auth::user()->where('username',Auth::user()->doctor_username)->where('account_type', 'medecin')->first()->email }}">
                            <br>
                            <br>
                            <button class="btn btn-primary">Envoyer</button>
                        </label>
                    </p>

                    <p>Médecin traitant: <b>{{ Auth::user()->doctor }}</b></p>

                    <form method="post" action="/update/doctor">
                        {{ csrf_field() }}
                        <label>Médecin Traitant:
                            <select class="selectpicker" name="doctor" data-live-search="true">
                                @php
                                    $doctors = \App\User::where('account_type', 'medecin')->get();
                                @endphp
                                @foreach($doctors as $doctor)
                                    <option>{{ $doctor->firstname }} {{ $doctor->lastname }}</option>
                                @endforeach
                            </select>
                        </label>
                        <button class="btn-submit">Sauvegarder</button>
                    </form>
                @endif
            </div>
        </div>
    </div><!-- Team Section -->
@endsection