<?php
	/** Template Name: Home Page */
	get_header(); 
?>

<div class="sticky-footer">	
	<?php get_template_part( 'template-parts/home/home', 'banner' ); ?>
	<div class="container">
		<div class="left-section">
			<?php
				get_template_part( 'template-parts/home/home', 'popular-feed' );
				get_template_part( 'template-parts/home/home', 'featured-feed' );
				get_template_part( 'template-parts/common/common', 'recent-feeds' );
			?>
		</div>	
		<div class="right-section sidebar-wrap">
			<?php get_sidebar(); ?>		
		</div>		
	</div>
</div>

<?php get_footer(); ?>