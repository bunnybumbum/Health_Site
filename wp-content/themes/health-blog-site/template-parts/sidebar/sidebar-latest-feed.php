<div class="divider sidebar-latest-feed-wrap">
    <div class="section-title">latest feed</div>

    <div class="latest-feed-post-wrap">
        <?php
            $args = array(
                'post_type' => 'post', 
                'post_status' => 'publish', 
                'posts_per_page' => 4, 
                'orderby' => 'modified',
                'tag' => 'latest-feed',
            );
            $my_query = null;
            $my_query = new WP_Query($args); $post_count = 0;
            if ( $my_query->have_posts() ): while ($my_query->have_posts()) : $my_query->the_post();$post_count++;
                $layout = ( $post_count == 1 || $post_count == 2 ) ? '1' : '2';
                get_template_part( 'template-parts/layout/layout', $layout );
            endwhile; endif; wp_reset_query();
        ?>            
    </div>  
</div>