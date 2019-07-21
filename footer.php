<?php 
/**
 * The template for displaying the footer
 */
?>
<footer class="primary-footer container page-end group">
    <div class ="row">

           <!--  Logo -->                  
                <div class="col-sm-12 footer-logo">
                    <?php echo get_bloginfo( 'name' ); ?>
                </div>
            
            <!-- Menu -->            
                <div class="col-sm-12 footer-menu">
                      <?php 
                          if ( has_nav_menu ( 'footer_menu' ) ) :
                                 wp_nav_menu ( array (
                                    'theme_location' => 'footer_menu',
                                    'container' => 'nav'
                                  ) );
                          endif;
                       ?>           
                </div>

            <!-- Sidebar Widget -->
                <div class="copyrights">
                    <?php get_sidebar(); ?>
                </div>

            <!-- Copyrights -->
            <div class="col-sm-12">
                    <small>
                        <?php 
                        _e( '&copy; <script>document.write(new Date().getFullYear())</script> IAP. All rights reserved. Designed & Developed by', 'iap' ); 
                        ?>
                            <div id= "developer">IAP ClauTheme Team</div>
                    </small>

            </div>

            <!-- Follow Widget-->
            <div class="col-sm-12 follow">
                <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                <?php endif; ?>

                   <!--  <a href="http://facebook.com"target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://twitter.com"target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="http://instagram.com"target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="http://pinterest.com"target="_blank"><i class="fab fa-pinterest"></i></a>
                    <a href="http://linkedin.com"target="_blank"><i class="fab fa-linkedin"></i></a> -->
            </div>
      </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>   








  	      		   
      	
      	

