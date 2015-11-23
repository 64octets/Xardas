<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

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
         <?php
            the_archive_title( '<h1 class="paper">', '</h1>' );
            the_archive_description( '<div class="taxonomy-description paper">', '</div>' );
            ?>
      </div>
   </div>
   </div>
   </div>


	<div class="container article-container">

		<?php if ( have_posts() ) : ?>


			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'xardas' ),
				'next_text'          => __( 'Next page', 'xardas' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'xardas' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

	</div><!-- .content-area -->

<?php get_footer(); ?>
</body>
