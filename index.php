<?php get_header(); ?>

<div id= "main"> 
         
        <div id="video" class="hidden-sm hidden-xs en">
         <div id="main-left">
                 <a name="" onclick="playvideo()" id="btn" class="btn btn-primary" href="#" role="button"></a>
         </div>
        <video width="1920" id="video-play" height="1080"  >
                        <source src="<?php echo get_template_directory_uri() ?>/assets/uploads/doodle-bg-8-blank.mpeg" type="video/mp4">
                        <source src="<?php echo get_template_directory_uri() ?>/assets/uploads/doodle-bg-8-blank.mpeg" type="video/mpeg">
        </video> 
        </div>         
</div>

<?php get_footer(); ?>