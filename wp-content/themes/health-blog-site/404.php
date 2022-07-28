<?php get_header(); ?>
	
<div class="sticky-footer">
	<div class="container container-404 text-center">
		<div class="icon-404-wrap"> <?php echo get_svgs('404-icon'); ?> </div>
		<h4 class="no-result-title">We Are Sorry.</h4> 
		<div class="no-result-txt">Sorry, the page you're looking for does't exist.</div>
		<a class="home-link-404 tran" href="<?php echo home_url(); ?>">Home</a>
	</div>
</div>

<?php get_footer(); ?>