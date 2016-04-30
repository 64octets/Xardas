<?php get_header(); ?>
<?php
         $a = get_header_image();
         if($a)
             echo ('<div id="tf-single-header" style="background-image: url(' . $a . ')">');
          else
          {
               $blog_url = get_bloginfo('template_directory');
               echo('<div id="tf-single-header" style="background-image: url(' . $blog_url . '/img/background.jpg)">');
          }
         ?>
    <div class="lower-border">
        <div class="container">
            <h1 class="paper"><strong><?php single_post_title(); ?></strong></h1>
            <h4 class="paper"><span class="entry-date"><?php echo get_the_date(); ?></span> - <?php the_time(); ?></h4>
        </div>
    </div>
    </div>
    <div class="single-content">
        <div class="container text-left">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <p>
                <?php _e('Sorry, this page does not exist.'); ?>
            </p>
            <?php endif; ?>
        </div>
    </div>
    <div class="container single-meta text-left">
        <div class="row">
            <div class="col-md-12">
                <h5 class="dark">verfasst von</h5>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <a href="/author/<?php the_author(); ?>/">
                    <h2><?php the_author(); ?>
               </a>
               </h2>
                    <br>
                    <?php endwhile; else : ?> Nope!
                    <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4 class="dark">Kategorien</h4>
                <p>
                    <?php the_category(', '); ?>
                </p>
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
