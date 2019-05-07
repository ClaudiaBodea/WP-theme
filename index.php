<?php 
/** 
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage clautheme
 * @since clautheme 1.0
 */

get_header(); ?>

<!-- <div id="primary" class="content-area">
	<main><?php if ( have_posts() ) : ?> -->









			<?php
			// Start the loop.
			while ( have_posts() ) : 
				the_post(); ?>
				
				<h1><?php the_title(); ?></h1> <!-- comentariu html -- se vede in source page -->
				<?php the_content();?>
				<?php the_date(); ?>
				<?php the_category();?>
				<?php
					echo '<hr>'; //comentariu php 

												
			// End the loop.
			endwhile;








			
			// If no content, include the "No posts found" template.
		else :
				

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
