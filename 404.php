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
             echo ('<div id="tf-page" style="background-image: url(' . $a . ')">');
         else
         {
               $blog_url = get_bloginfo('template_directory');
               echo('<div id="tf-page" style="background-image: url(' . $blog_url . '/img/Single-Background.png)">');
         }
         ?>
      <div class="lower-border">
         <div class="container">
            <h1 class="brand-heading paper">404 Error</h1>
         </div>
      </div>
      </div>
      <div class="container page-content">
          <br><br>
          <h1>Seite nicht gefunden</h1>
          <br>
          <p>"Da ist nichts zu holen"</p>
          <br><br>
      </div>
      <?php get_footer(); ?>
   </body>
</html>
