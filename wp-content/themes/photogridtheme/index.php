<?php get_header(); ?>








    


    <div id="content_inside">


    <?php


    $category_ID = get_category_id('blog');


    


    $args = array(


                 'post_type' => 'post',


                 'posts_per_page' => 9,


                 'post__not_in' => $slider_arr,


                 'cat' => '-' . $category_ID,


                 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)


                 );


    query_posts($args);


    $x = 0;


    while (have_posts()) : the_post(); ?>                        





        <?php if($x == 2 || $x == 5 || $x == 8 || $x == 11 || $x == 14 || $x == 17 || $x == 20 || $x == 23 || $x == 26 || $x == 29 || $x == 32 || $x == 35 || $x == 38 || $x == 41 || $x == 44) { ?>
		 


            <div class="home_post_box home_post_box_last">


        <?php } else { ?>


            <div class="home_post_box">


        <?php } ?>


            <a href="<?php the_permalink(); ?>" class="home_post_text_back"></a>


            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-image'); ?></a>


            


            <a href="<?php the_permalink(); ?>" class="home_post_text">


                <h3><?php the_title(); ?></h3>


                


               


            </a><!--//home_post_text-->


        </div><!--//home_post_box-->    


        


        <?php if($x == 2 || $x == 5 || $x == 8 || $x == 11 || $x == 14 || $x == 17 || $x == 20 || $x == 23 || $x == 26 || $x == 29 || $x == 32 || $x == 35 || $x == 38 || $x == 41 || $x == 44) { ?>


            <div class="clear"></div>


        <?php } ?>





    <?php $x++; ?>


    <?php endwhile; ?>        


    


    


    <div class="clear"></div>


    </div><!--//content_inside-->


    


    <div class="clear"></div>


    <div align="center" class="load_more_cont"><?php next_posts_link(' ') ?></div>


    


    <?php wp_reset_query(); ?>                        


    


<?php get_footer(); ?>