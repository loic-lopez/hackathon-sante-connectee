@extends('layouts.app')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner blog-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <h3>Notre blog</h3>
            <p>Vous pouvez retrouver ici toutes les nouveautés à propos de notre solution,</p>
            <p>mais aussi témoigner de votre ressenti</p>
            <ol class="breadcrumb">
                <li><a href="/">home</a></li>
                <li class="active">Blog</li>
            </ol>
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

    <!-- Page Content -->
    <div class="container-fluid no-padding page-content">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Blog Area -->
                <div class="col-md-9 col-sm-8 col-xs-12 blog-area ">
                    <article class="blog-post-list col-md-12 col-sm-12 col-xs-12">
                        <div class="entry-header">
                            <div class="entry-cover">
                                <a href="/blog/1"><img src="/img/patch.jpg" height="1%" alt="blog-1"/></a>
                                <a href="/blog/1" class="read-more"><i class="fa fa-link"></i>En savoir plus</a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="entry-meta">
                                <a href="#"><i class="fa fa-comment-o"></i>Commentaires<span>(3)</span></a>
                            </div>
                            <h3 class="entry-title"><a href="/blog/1">Une petite révolution dans le domaine de la santé</a></h3>
                            <div class="post-meta">
                                <p title="25th sep 2015" class="post-date">9 novembre 2017</p> par Diab'Health
                            </div>
                            <p>Le nouveau patch Freestyle Libre permet de connaître son taux de glycémie facilement et à tout moment [...] </p>
                        </div>
                    </article>
                    <article class="blog-post-list col-md-12 col-sm-12 col-xs-12">
                        <div class="entry-header">
                            <div class="entry-cover">
                                <a href="/blog/1"><img src="/img/logo.png" alt="blog-2"/></a>
                                <a href="/blog/1" class="read-more"><i class="fa fa-link"></i>En savoir plus</a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="entry-meta">
                                <a href="#"><i class="fa fa-comment-o"></i>Commentaires<span>(2)</span></a>
                            </div>
                            <h3 class="entry-title"><a href="/blog/1">Diab'Health, une amélioration dans la vie quotidienne pour des personnes atteintes de diabète</a></h3>
                            <div class="post-meta">
                                <p title="25th sep 2015" class="post-date">8 novembre 2017</p> par Diab'Health
                            </div>
                            <p>Diab'Health vous propose une nouvelle solution pour vous accompagner dans la vie de tous les jours [...]</p>
                        </div>
                    </article>
                    <!-- Pagination -->
                </div><!-- Blog Area /- -->
                <!-- Widget Area -->
                <!-- Widget Area /- -->
            </div><!-- Row /- -->
        </div><!-- Container /- -->
    </div><!-- Page Content /- -->
@endsection