<!DOCTYPE html>
<html lang="en">
   <?php get_header(); ?>
   <body id="tf-single">
<?php
$a = get_header_image();
if($a) 
    echo ('<header style="background-image: url(' . $a . ')">');
 else
 {
      $blog_url = get_bloginfo('template_directory');
      echo('<header style="background-image: url(' . $blog_url . '/img/Single-Background.png)">');
 }
?>
         <div class="container">
            <h1 class="brand-heading"> <?php single_post_title(); ?></h1>
            <p><em><span class="entry-date"><?php echo get_the_date(); ?></span> - <?php the_time(); ?></em></p>
         </div>
      </header>
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
            <h4>posted by</h4>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_author_url(); ?>">
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
            <h4>Kategorien</h4>
            <p><?php the_category(', '); ?></p>
            </div>
            <div class="col-md-6">
            <h4>Tags</h4>
            <p>
                  <?php the_tags( '', ', ', '<br />' ); ?>
            </p>
            </div>
      </div>
      </div>
      <?php get_footer(); ?>
      <?php wp_footer(); ?>
   </body>
</html>