<div class="divider featured-feed-wrap">
    <div class="section-title">featured feed</div>

    <div class="featured-feed-post-wrap row">
        <?php
        $args = array(
            'post_type' => 'post', 
            'post_status' => 'publish', 
            'posts_per_page' => 6, 
            'orderby' => 'modified',
            'tag' => 'featured-feed',
        );
        $my_query = null;
        $my_query = new WP_Query($args); $post_count = 0;
        if ( $my_query->have_posts() ): while ($my_query->have_posts()) : $my_query->the_post();$post_count++;
            $layout = ( $post_count == 1 || $post_count == 2 ) ? '1' : '2';
        ?>
            <div class="col-sm-6 post-mb-20">
                <?php get_template_part( 'template-parts/layout/layout', $layout ); ?>
            </div>                  
        <?php endwhile; endif; wp_reset_query(); ?>   
    </div>  
</div>