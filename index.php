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
        <div class = "achievements">
                <P>hello </P>
        </div>
        <div class="game">
                <iframe src="http://localhost/Wordpress/wordpress/hello/?id=7" scrolling="no" id="iframe_game">
                </iframe>
                <div class= "game-function">
                        <a href="#" > 
                                <button> Les't Go </button>
                        </a>
                </div>  
        </div>         
</div>


<?php get_footer(); ?>