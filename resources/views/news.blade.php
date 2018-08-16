@extends('layouts.app')
@section('css')
@endsection
@section('content')

<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">


    <!-- HEADER -->

    <div class="container">
    @include('include.header')
    </div><!-- end container-->


    <div class="section-title parallax-bg parallax-light">
        <ul class="bg-slideshow">
            <li>
                <div style="background-image:url(/media/bg/bg-title.jpg)" class="bg-slide"></div>
            </li>
        </ul>
        <div class="section__inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="ui-title-page">Actualit&eacute;s </h1>
                        <div class="ui-subtitle-page"></div>
                        <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section__inner -->
    </div><!-- end section-title -->


    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div class="section-default section-posts">
                    <article class="post post_mod-c clearfix">
                        <div class="entry-media">
                            <img class="img-responsive" src="/media/posts/820x320/1.jpg" alt="Foto">
                            <div class="entry-date"><a href="blog-post.html"><span class="entry-date__inner">10 feb</span><i class="icon fa fa-video-camera"></i></a></div>
                        </div>
                        <div class="entry-meta">
                            <span class="entry-meta__item">BY: <a class="entry-meta__link" href="blog-post.html">Silvere SEUMO</a></span>
                            <span class="entry-meta__item"><a class="entry-meta__link" href="blog-post.html"><time datetime="2012-10-27 15:20">feb 10, 2016</time></a></span>
                            <span class="entry-meta__item">In: <a class="entry-meta__link" href="blog-post.html">Creation de SMARTWORLD</a></span>
                            <span class="entry-meta__item"><i class="icon fa fa-comment"></i>34</span>
                        </div>

                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title ui-title-inner">Lorem ipsum dolor sit amet adipisicing elit</h2>
                            </div>
                            <div class="entry-content">
                                <p>Integer congue elit noin semper laoreet sed lectus orcil posuer nisal tempor se felis acm Pelentesque inyd urna. Integer vitae felis magn pec estibul nam rutrumc diam. Aliquam malesuada maurs etulg metu curabitur laoreet convallis nisal. Pellentes que bibendum dsras pol ttito don cursus ante  vulputate. Teugiat mil justo faucibusn sd Integ elemen tuma volutpat vestibulm enim mi tincidunt. Lorem ipsum dolor sit amet consectetur lorem ipsum dolor sit amet elit sed do eiusmod tempor incididunt ut labore .</p>
                            </div>
                            <div class="entry-footer">
                                <div class="decor-3"></div>
                                <a class="btn-link" href="blog-post.html">read more</a>
                            </div>
                        </div>
                    </article>

                    <article class="post post_mod-c clearfix">
                        <div class="entry-media">
                            <img class="img-responsive" src="/media/posts/820x320/2.jpg" alt="Foto">
                            <div class="entry-date"><a href="blog-post.html"><span class="entry-date__inner">10 feb</span><i class="icon fa fa-picture-o"></i></a></div>
                        </div>
                        <div class="entry-meta">
                            <span class="entry-meta__item">BY: <a class="entry-meta__link" href="blog-post.html">Silvere SEUMO</a></span>
                            <span class="entry-meta__item"><a class="entry-meta__link" href="blog-post.html"><time datetime="2012-10-27 15:20">feb 10, 2016</time></a></span>
                            <span class="entry-meta__item">In: <a class="entry-meta__link" href="blog-post.html">Creation de SMARTWORLD</a></span>
                            <span class="entry-meta__item"><i class="icon fa fa-comment"></i>34</span>
                        </div>

                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title ui-title-inner">Lorem ipsum dolor sit amet adipisicing elit</h2>
                            </div>
                            <div class="entry-content">
                                <p>Integer congue elit noin semper laoreet sed lectus orcil posuer nisal tempor se felis acm Pelentesque inyd urna. Integer vitae felis magn pec estibul nam rutrumc diam. Aliquam malesuada maurs etulg metu curabitur laoreet convallis nisal. Pellentes que bibendum dsras pol ttito don cursus ante  vulputate. Teugiat mil justo faucibusn sd Integ elemen tuma volutpat vestibulm enim mi tincidunt. Lorem ipsum dolor sit amet consectetur lorem ipsum dolor sit amet elit sed do eiusmod tempor incididunt ut labore .</p>
                            </div>
                            <div class="entry-footer">
                                <div class="decor-3"></div>
                                <a class="btn-link" href="blog-post.html">read more</a>
                            </div>
                        </div>
                    </article>

                    <article class="post post_mod-c clearfix">
                        <div class="entry-media">
                            <img class="img-responsive" src="/media/posts/820x320/3.jpg" alt="Foto">
                            <div class="entry-date"><a href="blog-post.html"><span class="entry-date__inner">10 feb</span><i class="icon fa fa-pencil"></i></a></div>
                        </div>
                        <div class="entry-meta">
                            <span class="entry-meta__item">BY: <a class="entry-meta__link" href="blog-post.html">Silvere SEUMO</a></span>
                            <span class="entry-meta__item"><a class="entry-meta__link" href="blog-post.html"><time datetime="2012-10-27 15:20">feb 10, 2016</time></a></span>
                            <span class="entry-meta__item">In: <a class="entry-meta__link" href="blog-post.html">Creation de SMARTWORLD</a></span>
                            <span class="entry-meta__item"><i class="icon fa fa-comment"></i>34</span>
                        </div>

                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title ui-title-inner">Lorem ipsum dolor sit amet adipisicing elit</h2>
                            </div>
                            <div class="entry-content">
                                <p>Integer congue elit noin semper laoreet sed lectus orcil posuer nisal tempor se felis acm Pelentesque inyd urna. Integer vitae felis magn pec estibul nam rutrumc diam. Aliquam malesuada maurs etulg metu curabitur laoreet convallis nisal. Pellentes que bibendum dsras pol ttito don cursus ante  vulputate. Teugiat mil justo faucibusn sd Integ elemen tuma volutpat vestibulm enim mi tincidunt. Lorem ipsum dolor sit amet consectetur lorem ipsum dolor sit amet elit sed do eiusmod tempor incididunt ut labore .</p>
                            </div>
                            <div class="entry-footer">
                                <div class="decor-3"></div>
                                <a class="btn-link" href="blog-post.html">read more</a>
                            </div>
                        </div>
                    </article>

                    <article class="post post_mod-c clearfix">
                        <div class="entry-media">
                            <img class="img-responsive" src="/media/posts/820x320/4.jpg" alt="Foto">
                            <div class="entry-date"><a href="blog-post.html"><span class="entry-date__inner">10 feb</span><i class="icon fa fa-pencil"></i></a></div>
                        </div>
                        <div class="entry-meta">
                            <span class="entry-meta__item">BY: <a class="entry-meta__link" href="blog-post.html">Silvere SEUMO</a></span>
                            <span class="entry-meta__item"><a class="entry-meta__link" href="blog-post.html"><time datetime="2012-10-27 15:20">feb 10, 2016</time></a></span>
                            <span class="entry-meta__item">In: <a class="entry-meta__link" href="blog-post.html">Creation de SMARTWORLD</a></span>
                            <span class="entry-meta__item"><i class="icon fa fa-comment"></i>34</span>
                        </div>

                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title ui-title-inner">Lorem ipsum dolor sit amet adipisicing elit</h2>
                            </div>
                            <div class="entry-content">
                                <p>Integer congue elit noin semper laoreet sed lectus orcil posuer nisal tempor se felis acm Pelentesque inyd urna. Integer vitae felis magn pec estibul nam rutrumc diam. Aliquam malesuada maurs etulg metu curabitur laoreet convallis nisal. Pellentes que bibendum dsras pol ttito don cursus ante  vulputate. Teugiat mil justo faucibusn sd Integ elemen tuma volutpat vestibulm enim mi tincidunt. Lorem ipsum dolor sit amet consectetur lorem ipsum dolor sit amet elit sed do eiusmod tempor incididunt ut labore .</p>
                            </div>
                            <div class="entry-footer">
                                <div class="decor-3"></div>
                                <a class="btn-link" href="blog-post.html">read more</a>
                            </div>
                        </div>
                    </article>

                    <ul class="pagination pagination_mod-a">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="pagination__first-arrow"><a href="#"><i class="icon fa fa-angle-left"></i></a></li>
                        <li><a href="#"><i class="icon fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-4">
                <aside class="sidebar">
                    <div class="widget widget_searce">
                        <form class="form-search" method="get" id="search-global-form">
                            <input class="form-search__input form-control" type="text" placeholder="search blog....">
                            <button class="form-search__btn"><i class="form-search__btn-inner icon fa fa-search"></i></button>
                        </form>
                    </div><!-- end widget -->


                    <section class="widget">
                        <h3 class="widget-title ui-title-inner">categories</h3>
                        <div class="decor-2 decor-2_mod-b"></div>
                        <div class="widget-content">
                            <ul class="list-widget list-unstyled">
                                <li class="list-widget__item">
                                    <a class="list-widget__link" href="blog-main.html">E-MARKETING</a>
                                </li>
                                <li class="list-widget__item">
                                    <a class="list-widget__link" href="blog-main.html">Notification SMS</a>
                                </li>
                                <li class="list-widget__item">
                                    <a class="list-widget__link" href="blog-main.html">Cartes de visite</a>
                                </li>
                                <li class="list-widget__item">
                                    <a class="list-widget__link" href="blog-main.html">Site avec service en ligne</a>
                                </li>
                                <li class="list-widget__item">
                                    <a class="list-widget__link" href="blog-main.html">Controle et suivi par telephone en temps reel</a>
                                </li>

                            </ul>
                        </div><!-- end widget-content -->
                    </section><!-- end widget -->


                    <section class="widget">
                        <h3 class="widget-title ui-title-inner">Recent posts</h3>
                        <div class="decor-2 decor-2_mod-b"></div>
                        <div class="widget-content">
                            <div class="post-widget clearfix">
                                <div class="post-widget__media"><a href="blog-main.html"><img class="img-responsive" src="/media/posts/80x80/1.jpg" alt="foto"></a></div>
                                <div class="post-widget__inner">
                                    <div class="post-widget__meta"><span class="post-widget__meta-inner"><time datetime="2012-10-27 15:20">feb 10, 2016</time></span><span class="post-widget__meta-inner"><i class="icon fa fa-comment color-primary"></i>34</span></div>
                                    <a class="post-widget__title" href="blog-main.html">Eiusmod tempor incidu labore et dolore</a>
                                </div>
                            </div><!-- end post-widget -->

                            <div class="post-widget clearfix">
                                <div class="post-widget__media"><a href="blog-main.html"><img class="img-responsive" src="/media/posts/80x80/2.jpg" alt="foto"></a></div>
                                <div class="post-widget__inner">
                                    <div class="post-widget__meta"><span class="post-widget__meta-inner"><time datetime="2012-10-27 15:20">feb 10, 2016</time></span><span class="post-widget__meta-inner"><i class="icon fa fa-comment color-primary"></i>34</span></div>
                                    <a class="post-widget__title" href="blog-main.html">Amet consectetur adip isicing elit sed</a>
                                </div>
                            </div><!-- end post-widget -->

                            <div class="post-widget clearfix">
                                <div class="post-widget__media"><a href="blog-main.html"><img class="img-responsive" src="/media/posts/80x80/3.jpg" alt="foto"></a></div>
                                <div class="post-widget__inner">
                                    <div class="post-widget__meta"><span class="post-widget__meta-inner"><time datetime="2012-10-27 15:20">feb 10, 2016</time></span><span class="post-widget__meta-inner"><i class="icon fa fa-comment color-primary"></i>34</span></div>
                                    <a class="post-widget__title" href="blog-main.html">Rure dolor indu prehen derit in voluptate</a>
                                </div>
                            </div><!-- end post-widget -->
                        </div><!-- end widget-content -->
                    </section><!-- end widget -->


                    <section class="widget">
                        <h3 class="widget-title ui-title-inner">tags cloud</h3>
                        <div class="decor-2 decor-2_mod-b"></div>
                        <div class="widget-content">
                            <ul class="list-tags">
                                <li class="list-tags__item"><a class="list-tags__btn" href="blog-main.html">Latest Offers</a></li>
                                <li class="list-tags__item"><a class="list-tags__btn" href="blog-main.html">Logistics</a></li>
                                <li class="list-tags__item"><a class="list-tags__btn" href="blog-main.html">Sea & Trucking</a></li>
                                <li class="list-tags__item"><a class="list-tags__btn" href="blog-main.html">How to Build</a></li>
                                <li class="list-tags__item"><a class="list-tags__btn" href="blog-main.html">All Cargo Services</a></li>
                                <li class="list-tags__item"><a class="list-tags__btn" href="blog-main.html">shipping Tips</a></li>
                                <li class="list-tags__item"><a class="list-tags__btn" href="blog-main.html">Basic Tricks</a></li>
                            </ul>
                        </div><!-- end widget-content -->
                    </section><!-- end widget -->


                    <section class="widget">
                        <h3 class="widget-title ui-title-inner">twitter feed</h3>
                        <div class="decor-2 decor-2_mod-b"></div>
                        <div class="widget-content">
                            <div class="post-social clearfix">
                                <div class="post-social__media"><i class="icon fa fa-twitter color-primary"></i></div>
                                <div class="post-social__inner">
                                    <a class="post-social__text" href="blog-main.html">Android How to: Take Screenshots on Android Auto http://dlvr.it/BL6PYf #Android #Google</a>
                                    <div class="post-social__meta"><time datetime="2012-10-27 15:20">feb 10, 2016</time></div>
                                </div>
                            </div><!-- end post-social -->
                            <div class="post-social clearfix">
                                <div class="post-social__media"><i class="icon fa fa-twitter color-primary"></i></div>
                                <div class="post-social__inner">
                                    <a class="post-social__text" href="blog-main.html">Exclusive iStock Promo Codes for WDL Readers #iStock #prvitae</a>
                                    <div class="post-social__meta"><time datetime="2012-10-27 15:20">feb 10, 2016</time></div>
                                </div>
                            </div><!-- end post-social -->
                            <div class="post-social clearfix">
                                <div class="post-social__media"><i class="icon fa fa-twitter color-primary"></i></div>
                                <div class="post-social__inner">
                                    <a class="post-social__text" href="blog-main.html">Recite the Quran with the intention to cure the diseases of your heart, so you can worship Allah with sincerity.</a>
                                    <div class="post-social__meta"><time datetime="2012-10-27 15:20">feb 10, 2016</time></div>
                                </div>
                            </div><!-- end post-social -->
                        </div><!-- end widget-content -->
                        <a class="post-social__btn btn btn_mod-a btn-sm btn-effect" href="contact.html"><span class="btn__inner">follow us</span></a>
                    </section><!-- end widget -->
                </aside>
            </div>

        </div>
    </div>


    <div class="section-area parallax-bg parallax-dark">
       @include('include.footer')
    </div><!-- end section-area -->

</div>
<!-- end layout-theme -->
@endsection
@section('js')
@endsection

