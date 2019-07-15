<?php get_header(); ?>
<?php 
	
	  // No #hero section on my theme. 
	  // We will create a custom WordPress query and get posts based on a tag/category called featured_post.
	
?>

<section>
	<div class="container group">
		<div class="row">
		
            <div class="content-area ">
           
		           <?php
					// Start the loop.
					while ( have_posts() ) : the_post(); 
				?>
				
				<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_post_thumbnail('featured-image'); ?>

					<div class = "article-inner">
						<div class="date"><?php echo get_the_date('F Y'); ?> | <strong><?php echo get_the_author(); ?></strong></div>
						<div class="category"><?php the_category(); ?></div>
						<div class="title-post"><h1><?php the_title(); ?></h1></div>
						<div class="post"><?php the_content(); ?></div>
						<div class="tag"><?php the_tags('#','#'); ?></div>
					</div>

					
						<blockquote>
						<?php						
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
							endwhile; 
						?>
						</blockquote>
					
					

										
						<?php the_widget( 'WP_Widget_Categories', 'dropdown=1&count=1' ); ?> 
					
					
					
						<div class = "title-post">
							<div class="hero-avatar">
								<?php echo get_avatar(get_the_author_meta('user_email')); ?> 
							</div>
							<div class="hero-title">
								<?php echo get_the_author_meta('user_firstname'); ?>
								<?php echo get_the_author_meta('user_lastname'); ?>
							</div>
						</div>
						<div class = "post">
							<blockquote>			
								<?php echo get_the_author_meta('user_description'); ?>
							</blockquote>
						</div>
				
				</article>
				
				<div class="pagenavi"><?php wp_pagenavi(); ?></div>	
				
			</div> <!-- content-area -->			
		</main>  <!-- row -->
	</div> <!-- container group -->	
</section>


<?php get_footer(); ?>

