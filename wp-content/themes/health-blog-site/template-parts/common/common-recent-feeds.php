<div class="divider recent-feeds-wrap">
    <div class="section-title">recent feeds</div>

    <div class="recent-feeds-post-wrap row">
        <div class="recent-feeds-full-width-wrap"></div>
        <?php
            $args = array(
                'post_type' => 'post', 
                'post_status' => 'publish', 
                'posts_per_page' => 8, 
                'orderby' => 'modified',
                'tag' => 'recent-feeds',
            );
            $my_query = null;
            $my_query = new WP_Query($args); $post_count = 0;
            if ( $my_query->have_posts() ): while ($my_query->have_posts()) : $my_query->the_post();$post_count++;
                if( $post_count <= 4 ){
        ?>
                    <div class="recent-feeds-post col-post-wrap col-xs-12 full-width">
                        <?php get_template_part( 'template-parts/layout/layout', '3' ); ?>
                    </div>  
                    <?php }else{ ?>
                    <div class="recent-feeds-post col-post-wrap col-sm-6 col-xs-12">
                        <?php get_template_part( 'template-parts/layout/layout', '2' ); ?>
                    </div>  
        <?php } endwhile; endif; wp_reset_query(); ?>            
    </div>  
</div>