<?php get_header(); ?>
<div  id="primary" class="container group">
	<main id="main" class="row" role="main">
		
    	<!--Page Content. Archive-->
            <div class="content-area ">

            	<!-- If Is Sticky Article -->
                	
           		<?php 
				$i=0;
				if ( have_posts() ) : 
					while ( have_posts() ) : the_post(); 
					if ( is_sticky() ) : 
					?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
						 	<div class="image">
										<?php the_post_thumbnail('featured-image'); ?>
							</div>
							<div class="category">
								<?php the_category(); ?>
							</div>
							<div class="date">
								<?php echo get_the_date('F Y'); ?> 
							</div>					
							<div class="title-post">
								<?php the_title();
								// ( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
								?>
							</div>
							<div class="post">
								<?php the_content(); ?>
							</div>
							<div class="tag">
								 <?php the_tags( ); ?> 
							</div>
						</article>
				<?php 
				else :
				?>
				<!-- Normal Articles -->
					<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>	
						<div class="image">
							<?php the_post_thumbnail('featured-image'); ?>
							<div class="category">
							<?php the_category(); ?>
							</div>
						</div><!--
						--><article class="article">							
								<div class="date">
									<?php echo get_the_date('F Y'); ?> 
								</div>					
								<div class="title-post">
									<?php the_title();
									// ( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
									?>
								</div>
								<div class="post">
									<?php the_content(); ?>
								</div>
								<div class="tag">
									 <?php the_tags('#','#'); ?> 
								</div>						
						</article>
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
		</div> <!-- content-area -->
	</main>  <!-- row -->
</div>	<!-- container group -->		

<?php get_footer(); ?>
