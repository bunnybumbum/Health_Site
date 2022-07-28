<?php
	global $dispayBreadcrumb;
	$dispayBreadcrumb = true;
	get_header();
?>

<div class="sticky-footer">
	<div class="container">
		<div class="left-section">
			<div class="section-title"><?php echo single_cat_title(); ?> feeds</div>
			<div class="all-cat-post-wrap row">
				<div class="cat-full-width-wrap"></div>
				<?php
					$post_count = 0;
					if (have_posts()) : while (have_posts()) : the_post(); $post_count++;
						if( $post_count <= 8 ){
				?>
							<div class="cat-post col-post-wrap col-xs-12 full-width">
								<?php get_template_part( 'template-parts/layout/layout', '3' ); ?>
							</div>	
						<?php }else{ ?>
							<div class="cat-post col-post-wrap col-sm-6 col-xs-12">
								<?php get_template_part( 'template-parts/layout/layout', '2' ); ?>
							</div>							
					<?php } endwhile; endif; ?>			
			</div>

			<?php if (function_exists('wp_pagination')) { ?>
				<div class="pagination">
					<?php wp_pagination(); ?>
				</div>
			<?php } ?>
		</div>

		<div class="right-section sidebar-wrap">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

<script>
	(function($){
		$(document).ready(function(){
            $('.cat-full-width-wrap').append($('.cat-post.full-width'));
		});
	})(jQuery);
</script>