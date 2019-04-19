<?php get_header(); ?>


    


    <h3 class="top_title">


        <?php if (is_category()) { ?>

              <?php single_cat_title(); ?>

        <?php } elseif( is_tag() ) { ?>

              <?php single_tag_title(); ?>

        <?php } elseif (is_day()) { ?>

              <?php the_time('F jS, Y'); ?>

        <?php } elseif (is_month()) { ?>

              <?php the_time('F, Y'); ?>

        <?php } elseif (is_year()) { ?>

              <?php the_time('Y'); ?>

        <?php } elseif (is_author()) { ?>

             Архивы автора

        <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

             Архивы блога

        <?php } ?>    


    </h3>


    


    <div id="content_inside">


    <?php


    global $wp_query;


        


    $args = array_merge( $wp_query->query, array( 'posts_per_page' => 9 ) );


    query_posts( $args );        


    


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