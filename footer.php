

<div class="credits section-inner">
<?php
if ( has_nav_menu( 'social' ) ) : ?>
			
				<ul class="social-menu">
							
					<?php 
					wp_nav_menu( array(
						'theme_location'	=>	'social',
						'container'			=>	'',
						'container_class'	=>	'menu-social',
						'items_wrap'		=>	'%3$s',
						'menu_id'			=>	'menu-social-items',
						'menu_class'		=>	'menu-items',
						'depth'				=>	1,
						'link_before'		=>	'<span class="screen-reader-text">',
						'link_after'		=>	'</span>',
						'fallback_cb'		=>	'',
					) );
					?>
					
				</ul><!-- .social-menu -->
			
			<?php endif; ?>
			

	<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></p>
	<!-- <p><?php _e( 'Theme by', 'hitchcock' ); ?> <a href="http://www.andersnoren.se">Anders Nor&eacute;n</a></p> -->
	
	
	<div class="clear"></div>
	
</div><!-- .credits -->

<?php wp_footer(); ?>


</body>
</html>