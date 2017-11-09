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
                                <a href="blog-post.html"><img src="images/blog-1.jpg" alt="blog-1"/></a>
                                <a href="blog-post.html" class="read-more"><i class="fa fa-link"></i>Read More</a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="entry-meta">
                                <a href="#"><i class="fa fa-comment-o"></i>Comments<span>(18)</span></a>
                                <a href="#"><i class="fa fa-heart-o"></i>Favorite<span>(33)</span></a>
                                <a href="#"><i class="fa fa-share-alt"></i>Share Post<span>(11)</span></a>
                            </div>
                            <h3 class="entry-title"><a href="blog-post.html">Varying walking speed may burn more calories</a></h3>
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
                                <a href="blog-post.html"><img src="images/blog-2.jpg" alt="blog-2"/></a>
                                <a href="blog-post.html" class="read-more"><i class="fa fa-link"></i>Read More</a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="entry-meta">
                                <a href="#"><i class="fa fa-comment-o"></i>Comments<span>(12)</span></a>
                                <a href="#"><i class="fa fa-heart-o"></i>Favorite<span>(11)</span></a>
                                <a href="#"><i class="fa fa-share-alt"></i>Share Post<span>(12)</span></a>
                            </div>
                            <h3 class="entry-title"><a href="blog-post.html">Latest Blog new Slider Image Post</a></h3>
                            <div class="post-meta">
                                <a href="#" title="25th sep 2015" class="post-date">25th sep 2015</a> by
                                <a href="#" title="Mathov" class="post-admin">Mathov</a> in Hospital
                            </div>
                            <p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa dicta sunt explicabo nemo enim ipsam [...] </p>
                        </div>
                    </article>
                    <article class="blog-post-list col-md-12 col-sm-12 col-xs-12">
                        <div class="entry-header">
                            <div class="entry-cover">
                                <a href="blog-post.html"><img src="images/blog-3.jpg" alt="blog-3"/></a>
                                <a href="blog-post.html" class="read-more"><i class="fa fa-link"></i>Read More</a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="entry-meta">
                                <a href="#"><i class="fa fa-comment-o"></i>Comments<span>(12)</span></a>
                                <a href="#"><i class="fa fa-heart-o"></i>Favorite<span>(11)</span></a>
                                <a href="#"><i class="fa fa-share-alt"></i>Share Post<span>(12)</span></a>
                            </div>
                            <h3 class="entry-title"><a href="blog-post.html">Latest Blog new Slider Image Post</a></h3>
                            <div class="post-meta">
                                <a href="#" title="25th sep 2015" class="post-date">25th sep 2015</a> by
                                <a href="#" title="Mathov" class="post-admin">Mathov</a> in Hospital
                            </div>
                            <p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa dicta sunt explicabo nemo enim ipsam [...] </p>
                        </div>
                    </article>
                    <!-- Pagination -->
                    <nav class="ow-pagination">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&lt;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&gt;</span>
                                </a>
                            </li>
                        </ul>
                    </nav><!-- Pagination /- -->
                </div><!-- Blog Area /- -->
                <!-- Widget Area -->
                <div class="col-md-3 col-sm-4 col-xs-12 widget-area no-left-padding">
                    <!-- Widget Search -->
                    <aside class="widget widget-search">
                        <h3 class="widget-title">Search Blog</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Here">
                            <span class="input-group-btn">
									<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
								</span>
                        </div>
                    </aside><!-- Widget Search /- -->
                    <!-- Widget Categories -->
                    <aside class="widget widget-categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="categories-type">
                            <li><a href="#" title="Ambulance">Ambulance<span>(10)</span></a></li>
                            <li><a href="#" title="Brain">Brain<span>(03)</span></a></li>
                            <li><a href="#" title="Cardinal">Cardinal<span>(12)</span></a></li>
                            <li><a href="#" title="Disease">Disease<span>(05)</span></a></li>
                            <li><a href="#" title="Illness">Illness <span>(02)</span></a></li>
                            <li><a href="#" title="Pain">Pain <span>(19)</span></a></li>
                            <li><a href="#" title="Weight">Weight <span>(08)</span></a></li>
                        </ul>
                    </aside><!-- Categories /- -->
                    <!-- Widget Social Media -->
                    <aside class="widget widget-social-media">
                        <h3 class="widget-title">Social Media</h3>
                        <ul class="">
                            <li><a href="#" class="tw" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="fb" title="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="gp" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="inst" title="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="ln" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="tm" title="tumblr"><i class="fa fa-tumblr"></i></a></li>
                        </ul>
                    </aside><!-- Categories /- -->
                    <!-- Widget Recent Post -->
                    <aside class="widget wiget-recent-post">
                        <h3 class="widget-title">Recent Post</h3>
                        <div class="recent-post-box">
                            <div class="recent-img">
                                <a href="blog-post.html"><img src="images/recent-1.jpg" alt="recent-1"/></a>
                            </div>
                            <div class="recent-title">
                                <a href="blog-post.html">Were gonna pay a call on the Addams Family</a>
                                <a href="#"><span><i class="fa fa-calendar"></i>Aug 06, 2015</span></a>
                            </div>
                        </div>
                        <div class="recent-post-box">
                            <div class="recent-img">
                                <a href="blog-post.html"><img src="images/recent-2.jpg" alt="recent-1"/></a>
                            </div>
                            <div class="recent-title">
                                <a href="blog-post.html">So lets make the most of this beautiful day</a>
                                <a href="#"><span><i class="fa fa-calendar"></i>Sep 11, 2015</span></a>
                            </div>
                        </div>
                        <div class="recent-post-box">
                            <div class="recent-img">
                                <a href="blog-post.html"><img src="images/recent-3.jpg" alt="recent-1"/></a>
                            </div>
                            <div class="recent-title">
                                <a href="blog-post.html">We're gonna make our dreams come true.</a>
                                <a href="#"><span><i class="fa fa-calendar"></i>Nov 18, 2015</span></a>
                            </div>
                        </div>
                        <div class="recent-post-box">
                            <div class="recent-img">
                                <a href="blog-post.html"><img src="images/recent-4.jpg" alt="recent-1"/></a>
                            </div>
                            <div class="recent-title">
                                <a href="blog-post.html">New life and new civilizations to boldly go</a>
                                <a href="#"><span><i class="fa fa-calendar"></i>Dec 25, 2015</span></a>
                            </div>
                        </div>
                    </aside><!-- Recent Post /- -->
                    <!-- Widget Archives -->
                    <aside class="widget widget-categories widget-archives">
                        <h3 class="widget-title">Archives</h3>
                        <ul class="categories-type archives-type">
                            <li><a href="#" title="October 2015">October 2015<span>(10)</span></a></li>
                            <li><a href="#" title="September 2015">September 2015<span>(03)</span></a></li>
                            <li><a href="#" title="Augest 2015">Augest 2015<span>(12)</span></a></li>
                            <li><a href="#" title="July 2015">July 2015<span>(05)</span></a></li>
                        </ul>
                    </aside><!-- Archives /- -->
                    <!-- Widget Tags -->
                    <aside class="widget widget-tags">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tags">
                            <a href="#" title="Amazing">Amazing</a>
                            <a href="#" title="Envato">Envato</a>
                            <a href="#" title="Themes">Themes</a>
                            <a href="#" title="Clean">Clean</a>
                            <a href="#" title="Responsiveness">Responsiveness</a>
                            <a href="#" title="SEO">SEO</a>
                            <a href="#" title="Mobile">Mobile</a>
                            <a href="#" title="IOS">Ios</a>
                            <a href="#" title="Flat">Flat</a>
                            <a href="#" title="Design">Design</a>
                        </div>
                    </aside><!-- Widget Tags /- -->
                </div><!-- Widget Area /- -->
            </div><!-- Row /- -->
        </div><!-- Container /- -->
    </div><!-- Page Content /- -->
@endsection