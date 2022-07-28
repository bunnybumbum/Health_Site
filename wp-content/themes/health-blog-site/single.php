<?php
	$catArr =  get_the_category ();
	global $dispayBreadcrumb;
	$dispayBreadcrumb = true;
	get_header();
?>
<div class="sticky-footer">
	<div class="container">
		<div class="left-section">
			<div class="divider">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
				<?php if ( has_post_thumbnail($post->ID)) { ?>					    
				    <div class="article-thumbnail">
				    	<?php the_post_thumbnail('thumbnail_1000x570', array('class' => 'img-responsive', 'alt' => get_the_title(), 'title' => get_the_title() ));?>							
				    </div>					    
				<?php } ?>
				<div class="cat-tag <?php echo $catArr[0] -> slug; ?>-cat-tag"> <?php echo $catArr[0] -> name; ?> </div>
				<h2 class="article-title"><?php the_title(); ?></h2>		
				<div class="article-content"> <?php the_content(); ?> </div>
			<?php endwhile; endif; ?>			
			</div>
			<?php get_template_part( 'template-parts/common/common', 'recent-feeds' ); ?>
		</div>	

		<div class="right-section sidebar-wrap">
			<?php get_sidebar(); ?>		
		</div>		
	</div>	
</div>

<?php get_footer(); ?>