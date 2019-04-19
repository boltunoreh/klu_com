<?php
/*
  Template Name: Blog
*/
?>
<?php get_header(); ?>
    

    <h3 class="top_title">Блог</h3>
    
    <div id="single_cont">
      
        <div class="single_content">
        
            <?php
            $args = array(
                         'category_name' => 'blog',
                         'post_type' => 'post',
                         'posts_per_page' => 4,
                         'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
                         );
            query_posts($args);
            while (have_posts()) : the_post(); ?>                                            

                <div class="blog_box">
                
                   
                    
                    <div class="blog_box_right">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-image'); ?></a>
                        <p><?php echo ds_get_excerpt('355'); ?></p>
                    </div><!--//blog_box_right-->
                    
                    <div class="clear"></div>
                
                </div><!--//blog_box-->

            <?php endwhile; ?>                                                            
            
            <div class="blog_nav">
                <div class="left"><?php previous_posts_link(' ') ?></div>
                <div class="right"><?php next_posts_link(' ') ?></div>
                <div class="clear"></div>
            </div><!--//blog_nav-->
            
            <?php wp_reset_query(); ?>                        
            
        </div><!--//single_content-->
        
        <?php get_sidebar(); ?>
        
        <div class="clear"></div>
    
    </div><!--//single_cont-->
    
<?php get_footer(); ?>            