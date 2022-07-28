<div class="divider sidebar-most-read-wrap">
    <div class="section-title">most read</div>

    <div class="featured-post-wrap">
        <?php
            $args = array(
                'post_type' => 'post', 
                'post_status' => 'publish', 
                'posts_per_page' => 5, 
                'orderby' => 'modified',
                'tag' => 'most-read',
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            if ( $my_query->have_posts() ): while ($my_query->have_posts()) : $my_query->the_post();
                get_template_part( 'template-parts/layout/layout', '2' );
            endwhile; endif; wp_reset_query();
        ?>            
    </div>  
</div>