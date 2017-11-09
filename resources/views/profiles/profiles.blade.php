@extends('layouts.app')

@section('content')
    <div class="page-banner team-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <h3>{{ Auth::user()->username }}</h3>
            <p>Access or modify your profile informations.</p>
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
                <h3>meet our doctors</h3>
                <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
            </div>
            <div class="team-carousel">
                <div class="col-md-12 team-type">
                    <img src="images/doctor-1.jpg" alt="doctor-1"/>
                    <div class="member-content">
                        <div class="member-name">
                            <h6>Dr.Adaline Becka</h6>
                            <p>Dental Specialist</p>
                        </div>
                        <div class="member-contact">
                            <a title="Phone" href="#"><img src="images/ftr-phone.png" alt="Phone" /></a>
                            <a title="Mail" href="#"><img src="images/ftr-email.png" alt="Email" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 team-type">
                    <img src="images/doctor-2.jpg" alt="doctor-2"/>
                    <div class="member-content">
                        <div class="member-name">
                            <h6>Dr.Adaline Becka</h6>
                            <p>Dental Specialist</p>
                        </div>
                        <div class="member-contact">
                            <a title="Phone" href="#"><img src="images/ftr-phone.png" alt="Phone" /></a>
                            <a title="Mail" href="#"><img src="images/ftr-email.png" alt="Email" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 team-type">
                    <img src="images/doctor-3.jpg" alt="doctor-3"/>
                    <div class="member-content">
                        <div class="member-name">
                            <h6>Dr.Adaline Becka</h6>
                            <p>Dental Specialist</p>
                        </div>
                        <div class="member-contact">
                            <a title="Phone" href="#"><img src="images/ftr-phone.png" alt="Phone" /></a>
                            <a title="Mail" href="#"><img src="images/ftr-email.png" alt="Email" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <a title="View All Doctors" href="#">View All Doctors<i class="fa fa-plus"></i></a>
        </div>
    </div><!-- Team Section -->

    <!-- Counter Section -->
    <div id="counter-section" class="container-fluid no-padding counter-section counter-section2">
        <!-- Container -->
        <div class="container">
            <div class="col-md-6 col-sm-6 no-padding">
                <!-- Happy Customer -->
                <div class="happy-customer">
                    <h3 class="block-title">Happy Customers</h3>
                    <p>Powered by over <span>4,000</span> Patients trust us with their sweet love.</p>
                    <a href="#"><i class="fa fa-thumbs-o-up"></i>Join Us now</a>
                </div><!-- Happy Customer /- -->
            </div>
            <div class="col-md-6 col-sm-6 no-padding">
                <!-- Counter App -->
                <div class="counter-app">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="statistics-box">
                            <i class="statistics-icon"><img alt="statistics-icon" src="images/icon-12.png"></i>
                            <div class="statistics-content">
                                <span data-statistics_percent="617" id="statistics_count-1">617</span>
                                <p>Hospital rooms</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="statistics-box">
                            <i class="statistics-icon"><img alt="statistics-icon" src="images/icon-22.png"></i>
                            <div class="statistics-content">
                                <span data-statistics_percent="458" id="statistics_count-2">458</span>
                                <p>Qualified Staff</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="statistics-box">
                            <i class="statistics-icon"><img alt="statistics-icon" src="images/icon-32.png"></i>
                            <div class="statistics-content">
                                <span data-statistics_percent="4200" id="statistics_count-3">4200</span>
                                <p>Satisfied Patients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="statistics-box">
                            <i class="statistics-icon"><img alt="statistics-icon" src="images/icon-42.png"></i>
                            <div class="statistics-content">
                                <span data-statistics_percent="124" id="statistics_count-4">124</span>
                                <p>Doctors Medals</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Counter App /- -->
            </div>
        </div><!-- Container /- -->
    </div><!-- Counter Section /- -->
@endsection