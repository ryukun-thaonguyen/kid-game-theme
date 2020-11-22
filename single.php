<?php get_header(); ?>

<div id="content-single">
    <!-- Hien thi noi dung bai post -->
    <?php
    $the_query = new WP_Query(array("p" => get_the_ID()));
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
    <div style="margin-right: 10%;margin-top: 70px;">
    <div class="_3Gj5_">
                        <ul class="_3lKd4 _1pZox _3VQM7">
                                <?php if (is_user_logged_in()) { ?>
                                        <li class="_2Inq2"><a class="_3eS0T _2Dy3y" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>"><?php
                                                                                                                                                                        $user = wp_get_current_user();

                                                                                                                                                                        if ($user) :
                                                                                                                                                                        ?>
                                                                <img width="40px" height="40px" src="<?php echo esc_url(get_avatar_url($user->ID)); ?>" />
                                                        <?php endif; ?></a>
                                                <div class="_1uu30" style="text-transform:capitalize;">
                                                        <a class="YBCQI fs-exclude" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>"><h1><?php global $current_user;
                                                                                                                                                                        wp_get_current_user();
                                                                                                                                                                        echo $current_user->user_login; ?></h1></a></div>

                                        </li>
                        </ul>
                        <div>
                        <h2 class="_32T7z"><b>Rank: <b style="color: red;">19</b></b></h2>
                        <h2 class="_32T7z">
                                        <b>Total Hour Played: <b id="counttimer" style="color: red;"></b></b></h2>
                                        </div>
                                        <?php } else { ?>
                                        <hr>
                                        <center>
                                        <button class="_2Inq2 btn btn-primary"><a href="<?php echo get_home_url() ?>/login">Login</a></button>
                                        </center>
                                        <br>
                                <?php } ?>
                </div>
    </div>

</div>
<?php get_footer(); ?>