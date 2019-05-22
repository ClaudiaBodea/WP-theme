<!DOCTYPE html>
<html lang="en">

  <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
       	<?php wp_head(); ?>
  </head>

  <body>
    <header class="container"> 
    		<div class="header">       
          		<div class="title">
            		<?php echo get_bloginfo( 'name' ); ?>
          		</div>
      		</div>
      		<div class="primary-menu">
      				<?php 
						if ( has_nav_menu ( 'primary_menu' ) ) :
							wp_nav_menu ( array (
								'theme_location' => 'primary',
								'container' => 'nav'
							) );
						endif;
					?>			
            </div>
            
    </header>
