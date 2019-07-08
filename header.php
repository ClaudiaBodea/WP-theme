<!DOCTYPE html>
<html lang="en">

  <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
       	<?php wp_head(); ?>
  </head>

  <body>
    <!--Header-->
    <header class="primary-header container group"> 
        <div class ="row">

           <!--  Logo -->    		      
          		<div class="col-sm-6 logo">
            		<?php echo get_bloginfo( 'name' ); ?>
          		</div>
      		
            <!-- Menu -->                                   
      		    <div class="col-sm-6 primary-menu">
                    <input type="checkbox" id="toggle">
                    <label for="toggle">&#9776;</label> 
                    <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
      				  <?php 
						  if ( has_nav_menu ( 'primary_menu' ) ) :
							     wp_nav_menu ( array (
								    'theme_location' => 'primary_menu',
								    'container' => 'nav'
							      ) );
						  endif;
					   ?>			
                </div>            
        </div>    
    </header>


