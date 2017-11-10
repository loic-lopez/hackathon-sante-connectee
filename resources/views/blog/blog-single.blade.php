@extends('layouts.app')

@section('content')

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
    </div>

    <div class="container-fluid no-padding page-content">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Blog Area -->
                <div class="col-md-9 col-sm-8 col-xs-12 blog-area">
                    <article class="blog-post-list single-post col-md-12 col-sm-12 col-xs-12">
                        <div class="entry-header">
                            <div class="entry-cover">
                                <img src="/img/patch.jpg" alt="blog-1"/>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="entry-meta">
                                <a href="#"><i class="fa fa-comment-o"></i>Commentaires<span>(3)</span></a>
                            </div>
                            <h3 class="entry-title">Une petite révolution dans le domaine de la santé</h3>
                            <div class="post-meta">
                                <p title="25th sep 2015" class="post-date">9 novembre 2017</p> par Diab'Health
                            </div>
                            <p>Le petit capteur mesure et enregistre les valeurs de mesure de la glycémie de manière continue et automatique en jour et nuit.</p>
                            <p>Pour contrôler le niveau de glycémie, il vous suffit d’effectuer un scan indolore d’une seconde, même à travers les vêtements.</p>
                            <p>Nager, prendre une douche ou faire du sport - Le capteur FreeStyle Libre est résistant de l’eau et peut être porté lorsque vous vous baignez, douchez, nagez5 et faites du sport.</p>
                            <p>À chaque scan, vous obtenez le taux de glucose actuel, les valeurs de glycémie des huit dernières heures et une flèche de tendance indiquant l’évolution de votre taux de glucose.</p>
                            <p>Le capteur FreeStyle Libre a été conçu pour être facile à appliquer et à porter. Il représente une technologie qui est tous les jours beaucoup moins intrusive que le test de glycémie traditionnel et fait la mesure du glucose facile.</p>
                        </div>
                    </article>
                    <div class="col-md-12">
                        <!-- Comment Section -->
                        <div class="comment-section">
                            <h3 class="section-heading"><span>3</span>Comments</h3>
                            <ul class="media-list" id="list">
                                <li class="media">
                                    <div class="media-body">
                                        <div class="media-content">
                                            <h4 class="media-heading">
                                                <span>Micheal</span>
                                            </h4>
                                            <p class="comment-content">Bonjour, tout ceci à l'air intéressant mais une question se pose : combien coûte le patch ?</p>
                                        </div>
                                        <ul class="media-list media-even">
                                            <li class="media">
                                                <div class="media-body">
                                                    <div class="media-content">
                                                        <h4 class="media-heading">
                                                            <span>Lucy</span>
                                                        </h4>
                                                        <p class="comment-content">Ce produit doit coûter beaucoup d'argent !</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-body">
                                        <div class="media-content">
                                            <h4 class="media-heading">
                                                <span>Gusriso</span>
                                            </h4>
                                            <p class="comment-content">Tout le dispositif coûte seulement 169,90€</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- Leave Comment -->
                    </div>
                    <div class="col-md-12">
                        <div class="leave-comment">
                            <h3 class="section-heading">Leave Your Comment</h3>
                            <form class="comment-form" id="form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 form-group">
                                        <input type="text" id="name" placeholder="Your Name" class="form-control">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea rows="7" placeholder="Your Comment" id="comment" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="button" name="post" id="post" value="Post Your Comment">
                                    </div>
                                </div>
                            </form>
                        </div><!-- Leave Comment /- -->
                    </div>
                </div><!-- Blog Area /- -->

            </div><!-- Row /- -->
        </div><!-- Container /- -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">
        $('#post').click(function () {
            $('#list').append("<li class=\"media\">\n" +
                "                                    <div class=\"media-body\">\n" +
                "                                        <div class=\"media-content\">\n" +
                "                                            <h4 class=\"media-heading\">\n" +
                "                                                <span>"+ $("#name").val() + "</span>\n" +
                "                                            </h4>\n" +
                "                                            <p class=\"comment-content\">" + $("#comment").val() + "</p>\n" +
                "                                        </div>\n" +
                "                                    </div>\n" +
                "                                </li>")
        });
    </script>

@endsection