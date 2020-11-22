<?php 
/**
 * Template Name: Page Game
 */
?>
<?php   
if(!is_user_logged_in()){
header("Location: http://localhost/manh/theme/login/");}
else{
?>
<?php get_header(); ?>

<style>
        .numberCircle {
                border-radius: 50%;
                width: 36px;
                height: 36px;
                padding: 4px;
                background: #fff;
                border: 2px solid red;
                color: #666;
                text-align: center;
                font-family: Lucida Console, Courier, monospace;
        }

        .level-container {
                position: relative;
        }

        .center {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 12px;
                color: red;
        }

        .img {
                width: 100%;
                height: auto;
        }
        .hvr-bounce-in {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-transition-duration: 0.5s;
        transition-duration: 0.5s;
        }
        .hvr-bounce-in:hover, .hvr-bounce-in:focus, .hvr-bounce-in:active {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
        -webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
        transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
        }
</style>
<div id= "main"> 
    <div id="video" class="hidden-sm hidden-xs en">
            <video width="1920" id="video-play" muted="muted" autoplay="true" height="1080"  >
                    <source src="<?php echo get_template_directory_uri() ?>/assets/uploads/doodle-bg-8-blank.mpeg" type="video/mp4">
                    <source src="<?php echo get_template_directory_uri() ?>/assets/uploads/doodle-bg-8-blank.mpeg" type="video/mpeg">
            </video> 
            <div id="level">
                    <img onclick="nextLevel()" src="<?php echo get_template_directory_uri() ?>/assets/uploads/nexticon.png" alt="">
                    <h2>Level 2</h2>
            </div>
    </div>
    <div class="achievements">
                <div class="Yth9H _3ZuGY">
                        <h2 class="_32T7z"><b class="_3BY7E">Level: <b class="center" style="color: red" id="current_game"></b></b></h2>
                        <div style="display: flex; justify-content: space-between;">
                                <div>
                                        <p>Complete the chart below to reach the next Level</p>
                                        <div style="width: 100%;  background-color: #ddd;">
                                                <div id="progess" style="text-align: right; background-color: green; color: white;"></div>
                                        </div>

                                </div>


                        </div>

                </div>

                <div class="_3Gj5_">
                        <div class="_3JPwy">    
                                <h2 class="_32T7z"><b class="_3BY7E">Game completed:</b></h2>
                                <div id="game_completed" style="display: flex;">
                                
                               </div>
                                
                        </div>

                </div>


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
    <div class="game">
            <iframe src="" scrolling="no" id="iframe_game">
            </iframe>
            <div class= "game-function">
                    <a href="" id="link-game" > 
                            <button> Let Go! </button>
                    </a>
            </div>  
    </div>         
</div>


<?php get_footer(); }?>

