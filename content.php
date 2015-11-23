<article>
   <?php
      if ( is_single() ) :
      	the_title( '<h1 class="entry-title">', '</h1>' );
      else :
      	the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
      endif;
      ?>
   <h4 class="dark"><span class="entry-date"><?php echo get_the_date(); ?></span> - <?php the_time(); ?></h4>
</article>

