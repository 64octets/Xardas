<!DOCTYPE html>
<html lang="en">
    <?php get_header() ?>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Community Story Project</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-about" class="page-scroll">Das Projekt</a></li>
            <li><a href="#tf-news" class="page-scroll">News</a></li>
            <li><a href="#tf-works" class="page-scroll">Screenshots</a></li>
            <li><a href="faq" class="page-scroll">FAQ</a></li>
            <li>
                <a href="https://www.youtube.com/user/Gothic3CSP"><i class="fa fa-youtube"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com/g3csp"><i class="fa fa-facebook"></i></a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
            <div class="content">
                <h1>Gothic 3 <strong><span class="color"><br>Community Story Project</span></strong></h1>
                <!--<p class="lead">We are a digital agency with <strong>years of experience</strong> and with <strong>extraordinary people</strong></p>-->
            </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about-wrapper">
        <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                </div>
                <div class="col-md-5">
                    <div class="about-text">
                        <div class="section-title section-title-dark">
                            <h4 class="paper">Das Community Story Project</h4>
                            <h1 class="paper">Gothic 3 <strong>neu erleben</strong></h1>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro paper">Erstellt von der Community für die Community</p>
                        <ul class="about-list paper">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Story</strong> - <em>eine verbesserte, durch kapitel gegliederte Story</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Charakteren</strong> - <em>aufgewertete und interesante Charaktere</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Quests</strong> - <em>noch mehr spannende Quests</em>
                            </li>

                        </ul>
                    <br>
                    <h4 class="paper"><a href="faq">mehr in den FAQ</a></h4>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>



    <!-- News Section
    ==========================================-->
    <div id="tf-news" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Neuigkeiten</strong></h2>
                                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h4><?php the_date(); ?> - <?php the_time(); ?></h4>
                <br>
                <?php the_excerpt(); ?>
                <br>
                <br>
                <hr style="border-top: 1px solid #444;">
                <br>
                <br>
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, there are no posts.'); ?></p>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <a href="archiv"><h4>Archiv</h4></a>
    </div>

    <!-- Wallpaper Paralax
    ==========================================-->
    <div id="wallpaper-paralax" class="text-center" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/04.jpg);">
        <div class="upper-border">
            <div class="lower-border">
            </div>
        </div>
    </div>

    <!-- Portfolio Section
    ==========================================-->
    <div id="tf-works">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2><strong>Screenshots</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <!--<small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>-->
            </div>
            <div class="space"></div>



            <div class="row">

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/01.jpg">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/02.jpg">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/02.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/03.jpg">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/03.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/04.jpg">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/04.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/05.jpg">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/05.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/06.jpg">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/06.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/07.jpg">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/07.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/08.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Wallpaper Paralax
    ==========================================-->
    <!--<div id="wallpaper-paralax" class="text-center" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/05.jpg);">
        <div class="upper-border">
            <div class="lower-border">
            </div>
        </div>
    </div>-->



    <!-- Testimonials Section
    ==========================================-->
    <!--<div id="tf-testimonials" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2><strong>Our clients’</strong> testimonials</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">
                            <div class="item">
                                <h5>Seit nunmehr sechs Jahren arbeitet ein Team aus unermüdlichen Fans am Community Story Project. Sie haben sich zum Ziel gesetzt Piranha Bytes Gothic 3 zu dem Spiel zu machen, das sich Fans rund um die Welt erhofft hatten. Ein Release-Termin steht noch nicht fest. Um die Wartezeit zu überbrücken haben die Macher zum Osterfest eine Mod angekündigt, in der ihr euch auf die Spuren eines mysteriösen Tieres rund um Ardea begebt. Als Belohnung erhaltet ihr eine exklusive Quest aus dem CSP. Weitere Details gibt es ab dem 5. April auf der offiziellen Website und auf der Facebook-Seite zum Projekt.</h5>
                                <p><strong>CSP veröffentlicht Oster-Mod 2015</strong> (30.03.2015)</p>
                            </div>

                            <div class="item">
                                <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                            </div>

                            <div class="item">
                                <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->


    <?php get_footer(); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

  </body>
</html>
