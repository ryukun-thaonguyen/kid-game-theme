<?php get_header(); ?>

<div id= "main">    
        <div class="content">
            <?php $number = 0 ?>
            <?php if(have_posts()) : while (have_posts()) : the_post(); 
                $number ++;
                if($number % 2 == 0){
                    get_template_part('template-parts/content-right');
                }else{
                    get_template_part('template-parts/content-left');
                }
                ?>
            <?php endwhile ?>
            <?php kids_game_pagination(); ?>
            <?php endif ?>
        </div>

        <div class="table_point">
            
        </div>  
            
</div>

<?php get_footer(); ?>