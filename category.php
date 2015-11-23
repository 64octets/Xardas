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

      <?php
$a = get_header_image();
if($a) 
    echo ('<div id="tf-page" class="text-center" style="background-image: url(' . $a . ')">');
 else
 {
      $blog_url = get_bloginfo('template_directory');
      echo('<div id="tf-page" class="text-center" style="background-image: url(' . $blog_url . '/img/Single-Background.png)">');
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
