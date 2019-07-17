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
                <div class="">
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

            <!-- Follow -->
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <?php endif; ?>
      </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>   








  	      		   
      	
      	

