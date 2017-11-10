@extends('layouts.app')

@section('content')

    <div class="page-banner team-banner container-fluid no-padding" style="background-image: url('http://www.ordiges.com/info-ordiges/wp-content/uploads/2015/04/Fotolia_65704515_M.jpg')!important;">
        <!-- Container -->
        <div class="container">
            <h3>Gestion des patients</h3>
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
            <div class="section-header center-block text-center">
                <h3>Liste des patients suivis :</h3>
                <div class="list-group col-md-3" style="left: 37.5%; right: 37.5%">
                    @php
                    $users = \App\User::where('account_type', 'patient')->where('doctor_username', Auth::user()->username)->get();
                    @endphp
                    @foreach($users as $user)
                        <a href="/patient/{{ $user->id }}" class="list-group-item">{{ $user->firstname }} {{ $user->lastname }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div><!-- Team Section -->
@endsection