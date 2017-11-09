@extends('layouts.app')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner blog-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <h3>Blog</h3>
            <p>To take a trivial example, which of us ever undertakes laborious physical exercise,</p>
            <p>except to obtain some advantage from it</p>
            <ol class="breadcrumb">
                <li><a href="#">home</a></li>
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
                                <a href="blog-post.html"><img src="/img/patch.jpg" height="1%" alt="blog-1"/></a>
                                <a href="blog-post.html" class="read-more"><i class="fa fa-link"></i>En savoir plus</a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="entry-meta">
                                <a href="#"><i class="fa fa-comment-o"></i>Comments<span>(18)</span></a>
                                <a href="#"><i class="fa fa-heart-o"></i>Favorite<span>(33)</span></a>
                                <a href="#"><i class="fa fa-share-alt"></i>Share Post<span>(11)</span></a>
                            </div>
                            <h3 class="entry-title"><a href="blog-post.html">Une petite révolution dans le domaine de la santé</a></h3>
                            <div class="post-meta">
                                <a href="#" title="25th sep 2015" class="post-date">25th sep 2015</a> by
                                <a href="#" title="Mathov" class="post-admin">Mathov</a> in Hospital
                            </div>
                            <p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione [...] </p>
                        </div>
                    </article>
                    <article class="blog-post-list col-md-12 col-sm-12 col-xs-12">
                        <div class="entry-header">
                            <div class="entry-cover">
                                <a href="blog-post.html"><img src="/img/logo.png" alt="blog-2"/></a>
                                <a href="blog-post.html" class="read-more"><i class="fa fa-link"></i>En savoir plus</a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="entry-meta">
                                <a href="#"><i class="fa fa-comment-o"></i>Comments<span>(12)</span></a>
                                <a href="#"><i class="fa fa-heart-o"></i>Favorite<span>(11)</span></a>
                                <a href="#"><i class="fa fa-share-alt"></i>Share Post<span>(12)</span></a>
                            </div>
                            <h3 class="entry-title"><a href="blog-post.html">Diab'Health, une amélioration dans la vie quotidienne pour des personnes atteintes de diabète</a></h3>
                            <div class="post-meta">
                                <a href="#" title="25th sep 2015" class="post-date">8 novembre 2017</a> par Diab'Health
                            </div>
                            <p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa dicta sunt explicabo nemo enim ipsam [...] </p>
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