<?php
    /* Template Name: Privacy Policy Page */
	get_header();
?>

<div class="sticky-footer">
	<div class="static-page-banner-wrap">
		<div class="container">			
			<div class="static-page-banner privacy-banner"></div>
		</div>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="static-page-content-main-wrap divider">
		<div class="container">			
			<div class="static-page-content-wrap">
				<div class="section-title"><?php the_title(); ?></div>
    			<div class="static-page-content"> <?php the_content(); ?> </div>   	
			</div>
		</div>
	</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>