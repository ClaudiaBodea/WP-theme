<footer class="primary-footer container bottom group">
    <div class ="row">

           <!--  Logo -->                  
                <div class="col-sm-12 footer-logo">
                    <?php echo get_bloginfo( 'name' ); ?>
                </div>
            
            <!-- Menu -->            
                <div class="col-sm-12 menu footer-menu">
                      <?php 
                          if ( has_nav_menu ( 'footer_menu' ) ) :
                                 wp_nav_menu ( array (
                                    'theme_location' => 'footer_menu',
                                    'container' => 'nav'
                                  ) );
                          endif;
                       ?>           
                </div>

            <!-- Copyrights -->
                <div class="copyrights">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><br>
                    <small>&copy; 2015 Palo Alto. All Rights Reserved. Designed & Developed by <div id= "budha"> PixelBudha Team</div> </small><br>
                </div>

            <!-- Follow -->
                <div class="follow">
                    <a href="http://facebook.com"target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://twitter.com"target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="http://instagram.com"target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="http://pinterest.com"target="_blank"><i class="fab fa-pinterest"></i></a>
                    <a href="http://linkedin.com"target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
      </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>   








  	      		   
      	
      	

