<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
get_header(); ?>
<section>
<div class="container group">
	<main class="row" role="main">
		<!--Hero-->
		<!-- <section class="hero container subtitle"> Here I can include a HERO SECTION for exercise purpose
            <h2></h2>
            <p></p>
            <a class="btn btn-alt" href="rezerva.html">ABC</a>
    	</section> -->

    	<!--Page Content.-->
            <div class="content-area ">

            	<!-- error-404 not-found -->
                <article class="article error-404 not-found">	
		           		<h1><?php _e( 'Error', 'iaptheme' ); ?></h1>
						<p><?php _e( 'End of internet! Page not found' );?></p>
						<?php get_search_form(); ?>			
				</article>
			
			</div>
	</main>
</div>
</section>			

<?php get_footer(); ?>