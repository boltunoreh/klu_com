<?php get_header(); ?>

    <!--<h3 class="top_title">-->
    <?php
    /*$categories = get_the_category();
    
    if($categories) {
            foreach($categories as $category) {
                    echo $category->cat_name;
                    break;
            }    
    }*/
    ?>
    <!--</h3>-->
    
    <div id="single_cont">
      
        <div class="single_content">
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                  
                <h1 class="single_title"><?php the_title(); ?></h1>                <div class="single_inside_content">        
                <?php the_content(); ?>                        </div><!--//single_inside_content-->
                <br /><br />        
                <?php //comments_template(); ?>        																																																										
            <?php endwhile; else: ?>        
                <h3>Извините, но по Вашему запросу ничего не было найдено.</h3>        
            <?php endif; ?>                    
            
            
        </div><!--//single_content-->
        
        <?php get_sidebar(); ?>
        
        <div class="clear"></div>
    
    </div><!--//single_cont-->
    
<?php get_footer(); ?>            