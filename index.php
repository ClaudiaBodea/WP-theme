<?php get_header(); ?>
<?php 
	
	  // No #hero section on my theme. 
	  // We will create a custom WordPress query and get posts based on a tag/category called featured_post.
	
?>
<div class="container group">
	<main class="row" role="main">
		<!--Hero-->
		<!-- <section id="hero" class="hero container subtitle">
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
            </section> -->

    	<!--Page Content. Articles-->
            <div class="content-area ">

            	<!-- If Is Sticky Article -->
                
		           <?php 
					$i=0;
					if ( have_posts() ) : 
						while ( have_posts() ) : the_post(); 
						if ( is_sticky() ) : 
					?>
						<article class="article">
								<div class="image">
										<?php the_post_thumbnail('featured-image'); ?>
								</div>
								<div class = "article-inner"> 									
									<div class="date">
										<?php echo get_the_date('F Y'); ?> | <strong><?php echo get_the_author(); ?></strong>
									</div>	
									<div class="category">
										<?php the_category(); ?>
									</div>				
									<div class="title-post">
										<?php the_title(); ?>
									</div>
									<div class="post">
										<?php the_content(); ?>
									</div>
									<div class="tag">
										 <?php the_tags( ); ?> 
									</div>
								</div>
						</article>
				
               
				
			<?php 
				else :
			?>
				<!-- Normal Articles -->
				<article class="article">
				<div class="image">
						<?php the_post_thumbnail('featured-image'); ?>
					</div>					
				
				<div class = "article-inner"> 						
						<div class="date">
							<?php echo get_the_date('F Y'); ?> | <strong><?php echo get_the_author(); ?></strong>
						</div>
						<div class="category">
						<?php the_category(); ?>
						</div>

						<div class="title-post">
							<?php the_title(); ?>
						</div>
						<div class="post">
							<?php the_content(); ?>
						</div>
						<div class="tag">
							 <?php the_tags('#','#'); ?> 
						</div>	
				</div>					
				</article>
				
			<?php  
				endif;
				// End of the while loop. We have listed all the posts.			 
				endwhile; 
			else :
				// If there are no posts to show than display a custom message.
				echo _e( 'There are no articles to show', 'iap' );
			endif;
			?>

			<!--Page Number-->
			<div class="pagenavi">
				<?php wp_pagenavi(); ?>
			</div>
			</div>
	</main>
</div>			

<?php get_footer(); ?>