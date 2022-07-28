<?php if ( have_posts() ) { ?>
	<div class="search-wrap">
		<div class="left-section">
			<h4 class="search-title">Search Results for - <span><?php echo $s ?></span> </h4>
			<div class="search-post-wrap row">
		    	<?php
		    		$post_count = 0;
		    		while ( have_posts() ) {
		    			the_post();$post_count++;
		    			$layout = ( $post_count == 9 || $post_count == 10 ) ? '2' : '1';
				?>
					<div class="col-sm-6 post-mb-20">
						<?php get_template_part( 'template-parts/layout/layout', $layout ); ?>
					</div>
		    	<?php } ?>
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
<?php }else{ ?>
	<div class="no-result-main-wrap text-center">
		<div class="icon-404-wrap"> <?php echo get_svgs('404-icon'); ?> </div>
		<h4 class="no-result-title">No Search Results Found!</h4> 
		<div class="no-result-txt">No result found please try again with a different keyword.</div>	
	</div>
<?php } ?>