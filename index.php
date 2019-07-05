<?php get_header(); 
	if ( have_posts() ) :
			while ( have_posts() ) : 
				the_post(); ?>
				<div class="image">
					<?php the_post_thumbnail(); ?>
				</div>

			<div class="pagina">
				<div class="category">
					<?php the_category(); ?>
				</div>
				
				<div class="date">
					<?php the_date(); ?>
				</div>
				
				<div class="image">
					<?php the_post_thumbnail(); ?>
				</div>
				
				<div class="title-post">
					<?php the_title(); ?>
				</div>

				<div class="post">
					<?php the_content(); ?>
				</div>

			</div>
				
	<?php
		
			endwhile;
		else :
			echo 'No Posts.';
		endif;
		
	?>
	<!-- div by default wp-page navi . se fva face un css separat numai pt paginare -->
<?php wp_pagenavi(); ?>

	<?php get_footer(); ?>