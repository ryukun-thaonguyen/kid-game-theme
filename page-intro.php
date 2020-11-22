<?php

/**
 * Template Name: page intro
 */

?>
<?php get_header();?>

    <div class="intro__game--detail">
        <h1>Introduction about how to play games</h1>

        <iframe src="https://www.youtube.com/embed/19oTGb0C_cA" frameborder="0" allowfullscreen class="iframe__intro--game"></iframe>

        <div class="game__intro--text">
            <h2>
            Here is tutorial for the hero want to play games  
            </h2>

            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic itaque odio sint qui repellendus. Sint eligendi ut minus. Dignissimos quae exercitationem sed facere nulla commodi nisi obcaecati laudantium, illum voluptatum.
            </p>

            <div class="game__intro--img">
                <img src="<?php echo get_template_directory_uri();?>/assets/uploads/game__intro--detail.png" alt="">
                <img src="<?php echo get_template_directory_uri();?>../assets/uploads/game__intro--detail-.png" alt="">
            </div>
        </div>
    </div>

<?php get_footer();?>