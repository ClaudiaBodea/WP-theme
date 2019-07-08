<?php get_header(); ?>
<?php 
	
	  // No #hero section on my theme. 
	  // We will create a custom WordPress query and get posts based on a tag/category called featured_post.
	
?>
<div class="container group">
	<main class="row" role="main">
		<!--Hero-->
		<!-- <section class="hero container subtitle"> Here I can include a HERO SECTION for exercise purpose
            <h2></h2>
            <p></p>
            <a class="btn btn-alt" href="rezerva.html">ABC</a>
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
									<?php the_title(); ?>
								</div>
								<div class="post">
									<?php the_content(); ?>
								</div>
								<div class="tag">
									 <?php the_tags( ); ?> 
								</div>
				
               
				
			<?php 
				else :
			?>
				<!-- Normal Articles -->
				
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
							<?php the_title(); ?>
						</div>
						<div class="post">
							<?php the_content(); ?>
						</div>
						<div class="tag">
							 <?php the_tags('#','#'); ?> 
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

			
	<!-- div by default wp-page navi . se fva face un css separat numai pt paginare -->
