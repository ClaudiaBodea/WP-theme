<footer class="continut">
  	  <div class="footer">
      	<div class="name">
       	 	<?php echo get_bloginfo( 'name' ); ?>
     	</div>
     	<?php 
						if ( has_nav_menu ( 'footer_menu' ) ) :
							wp_nav_menu ( array (
								'theme_location' => 'footer_menu',
								'container' => 'nav'
							) );
						endif;
					?>			   
      	<div class="copyrights">
     		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><br>
      		<small>&copy; 2015 Palo Alto. All Rights Reserved. Designed & Developed by <div id= "budha"> PixelBudha Team</div> </small><br>
   	  	</div>
      	<div class="follow">
      		<a href="http://facebook.com"><i class="fab fa-facebook-f"></i></a>
      		<a href="http://twitter.com"><i class="fab fa-twitter"></i></a>
      		<a href="http://instagram.com"><i class="fab fa-instagram"></i></a>
      		<a href="http://pinterest.com"><i class="fab fa-pinterest"></i></a>
   		 </div>
  	  </div>

  <?php wp_footer(); ?>
</footer>
</body>

</html>
