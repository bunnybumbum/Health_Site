<?php
    /* Template Name: Contact Us Page */   
    global $is_eu_request;
    if($is_eu_request){
    	header('Location:/');
    }
	get_header();
?>

<div class="sticky-footer">
	<div class="static-page-banner-wrap">
		<div class="container">			
			<div class="static-page-banner contact-banner"></div>
		</div>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="static-page-content-main-wrap divider">
		<div class="container">			
			<div class="static-page-content-wrap">
				<div class="section-title"><?php the_title(); ?></div>
				<div class="contact-us-form">
					<p class="contact-form-desc">Please fill the form below and someone will get in touch with you shortly.</p>
					<?php echo do_shortcode( '[contact-form-7 id="417" title="Contact Us"]' ); ?>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>