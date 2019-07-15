<?php get_header(); ?>
<?php 
	
	  // No #hero section on my theme. 
	  // We will create a custom WordPress query and get posts based on a tag/category called featured_post.
	
?>

<section class="hero-slider">
<?php
	// Query arguments : https://codex.wordpress.org/Class_Reference/WP_Query
	$args = array(
		'posts_per_page'	=> 2,
		'orderby'			=> 'date',
		'order'				=> 'DESC',
    	// 'category_name' 	=> 'featured'
	);
	
	// create the query
	$slider = new WP_Query($args);
	
	// loop through the new created query  
	if ( $slider->have_posts() ) :
		while ( $slider->have_posts() ) : $slider->the_post();
			?>
			<div id="hero" <?php post_class('hero'); ?>>
			<style>
				.post-<?php echo get_the_ID(); ?> .hero-item {
					background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>);
				}
			</style>
				<div class="hero-item">
					<div class="hero-content container">
						<div class="hero-avatar">
							<?php echo get_avatar(get_the_author_meta('user_email')); ?>
						</div>
						<div class="hero-title">
							<?php the_title( sprintf('<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>');?>
						</div>
					</div>
				</div>
			</div>
			<?php
		endwhile;
	else: 
		echo __( 'There are no posts to show', 'textdomain' );
	endif;
	
	wp_reset_postdata(); 
?>
</section>

<div  id="primary" class="container group">
	<main class="row" role="main">

    	<!--Page Content. Articles-->
            <div class="content-area ">

            	<div class="widget">
                    <?php get_sidebar(); ?>
                </div>

            	<!-- If Is Sticky Article -->
                
		           <?php 
					$i=0;
					if ( have_posts() ) : 	
							while ( have_posts() ) : the_post(); 
							if ( is_sticky() ) : 
					?>
						<article class="article">
								
										<?php the_post_thumbnail('featured-image'); ?>
								
								<div class = "article-inner"> 									
									<div class="date">
										<?php echo get_the_date('F Y'); ?> | <strong><?php echo get_the_author(); ?></strong>
									</div>	
									<div class="category">
										<?php the_category(); ?>
									</div>				
									<div class="title-post">
										<?php the_title( sprintf('<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>');?>
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
				
						<?php the_post_thumbnail('featured-image'); ?>
										
				
				<div class = "article-inner"> 						
						<div class="date">
							<?php echo get_the_date('F Y'); ?> | <strong><?php echo get_the_author(); ?></strong>
						</div>
						<div class="category">
						<?php the_category(); ?>
						</div>

						<div class="title-post">
							<?php the_title( sprintf('<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>');?>
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
		</div> <!-- content-area -->
	</main>  <!-- row -->
</div>	<!-- container group -->		

<?php get_footer(); ?>

