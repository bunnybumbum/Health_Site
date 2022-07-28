<footer class="footer">	
	<div class="footer-inner">
		<div class="container">
			<div class="footer-links-wrap">
				<?php wp_nav_menu( array( 'theme_location'=>'footer-menu' ) ); ?>
			</div>
			<h2 class="logo footer-logo">
				<a class="logo-a disp-b text-hide" href="<?php echo home_url(); ?>"> <?php echo home_url(); ?>
					<?php echo get_svgs('common-logo'); ?>
				</a>
			</h2>
			<p class="footer-site-desc">
				<?php bloginfo('description'); ?>
			</p>
		</div>	
	</div>
	<div class="footer-rights-txt">
		<div class="container">
			&copy; <?php echo date('Y'); ?> <?php bloginfo('title'); ?>. All rights reserved
		</div>
	</div>				
</footer>

<?php wp_footer(); ?>
</body>
</html>