<?php get_header(); ?>
<?php
         $a = get_header_image();
         if($a)
             echo ('<div id="tf-page-header" style="background-image: url(' . $a . ')">');
         else
         {
               $blog_url = get_bloginfo('template_directory');
               echo('<div id="tf-page-header" style="background-image: url(' . $blog_url . '/img/background.jpg)">');
         }
         ?>
    <div class="lower-border">
        <div class="container">
            <h1 class="brand-heading paper"><strong>404 Error</strong></h1>
        </div>
    </div>
    </div>
    <div class="container page-content">
        <br>
        <br>
        <h1><?php _e('Seite nicht gefunden', 'xardas')?></h1>
        <br>
        <p><?php _e('Da ist nichts zu holen', 'xardas')?></p>
        <br>
        <br>
    </div>
    <?php get_footer(); ?>
