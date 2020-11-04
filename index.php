<?php get_header(); ?>

<div id= "main"> 
         
        <div id="video" class="hidden-sm hidden-xs en">
         <div id="main-left">
                 <a name="" onclick="playvideo()" id="btn" class="btn btn-primary" href="#" role="button"></a>
         </div>
        <video width="1920" id="video-play" muted="muted" autoplay="true" height="1080"  >
                        <source src="<?php echo get_template_directory_uri() ?>/assets/uploads/doodle-bg-8-blank.mpeg" type="video/mp4">
                        <source src="<?php echo get_template_directory_uri() ?>/assets/uploads/doodle-bg-8-blank.mpeg" type="video/mpeg">
        </video> 
        </div>
        <div class= "content">
                <div class = "achievements">
                        <P>hello </P>
                </div>
                <div class= "game">
                <?php 
                        $the_query = new WP_Query('p=5');
                        if ( $the_query->have_posts() ) {
                                while ( $the_query->have_posts() ) {
                                        $the_query->the_post();
                                        get_template_part('template-parts/content');
                                }   
                        } else {
                                echo 'không có post nào theo yêu cầu ông ạ';
                        }
                        wp_reset_postdata();
                        ?> 
                </div>
        </div>          
</div>


<?php get_footer(); ?>