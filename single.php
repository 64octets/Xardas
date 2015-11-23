<!DOCTYPE html>
<html lang="en">
   <?php get_header(); ?>
   <body id="body-page">
         
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
          <a class="navbar-brand" href="/de">Community Story Project</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/de" class="page-scroll">Startseite</a></li>
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
      
      <?php
         $a = get_header_image();
         if($a) 
             echo ('<div id="tf-single" style="background-image: url(' . $a . ')">');
          else
          {
               $blog_url = get_bloginfo('template_directory');
               echo('<div id="tf-single" style="background-image: url(' . $blog_url . '/img/Single-Background.png)">');
          }
         ?>
            <div class="lower-border">
            <div class="container">
                  <h1 class="brand-heading paper"> <?php single_post_title(); ?></h1>
                  <h4 class="paper"><em><span class="entry-date"><?php echo get_the_date(); ?></span> - <?php the_time(); ?></em></h4>
            </div>
            </div>
      </div>
      <div class="single-content">
         <div class="container text-left">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
         </div>
      </div>
      <div class="container single-meta text-left">
         <div class="row">
            <div class="col-md-12">
               <h4 class="dark">posted by</h4>
               <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>
               <a href="/author/<?php the_author(); ?>/">
                  <h2><?php the_author(); ?>
               </a>
               </h2><br>
               <?php endwhile; else : ?>
               Nope!
               <?php endif; ?>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <h4 class="dark">Kategorien</h4>
               <p><?php the_category(', '); ?></p>
            </div>
            <div class="col-md-6">
               <h4 class="dark">Tags</h4>
               <p>
                  <?php the_tags( '', ', ', '<br />' ); ?>
               </p>
            </div>
         </div>
      </div>
      <?php get_footer(); ?>
      
   </body>
</html>

