<?php get_header(); ?>
<?php 
	
	  // No #hero section on my theme. 
	  // We will create a custom WordPress query and get posts based on a tag/category called featured_post.
	
?>
<section id="hero" class="hero">
	<?php if (has_post_thumbnail()): ?>
	<div class="hero-item" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<?php else: ?>
	<div class="hero-item">
	<?php endif; ?>
		<div class="hero-content container">
			<div class="hero-avatar">
				<?php echo get_avatar(get_the_author_meta('user_email')); ?>
			</div>
			<div class="hero-title">
				<?php the_title(); ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container group">
		<div class="row">
		
            <div class="content-area ">
           
		           <?php
					// Start the loop.
					while ( have_posts() ) : the_post(); 
				?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<footer>

							<?php echo get_avatar(get_the_author_meta('user_email')); ?>
							<h3>
							<?php echo get_the_author_meta('user_firstname'); ?>
							<?php echo get_the_author_meta('user_lastname'); ?>
							<!-- facebook + twitter -->

						</h3>
						<p>
							<?php echo get_the_author_meta('user_description'); ?>
							</p>
							
							<?php get_sidebar(); ?>

						</footer>
					</article>
				<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					endwhile; 
				?>
			</div>
			
			
		</div>
	</div>
</section>

<?php get_footer(); ?>