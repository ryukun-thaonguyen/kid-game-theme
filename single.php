<?php get_header(); ?>

<div id="content-single">

    <!-- Hien thi noi dung bai post -->
    <?php
   $the_query = new WP_Query(array("p"=>get_the_ID()));
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            get_template_part('template-parts/content-single', get_post_format());
        }
    } else {
        echo 'không có post nào theo yêu cầu ông ạ';
    }
    wp_reset_postdata();
    ?>

    <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>