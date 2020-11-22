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
        body{
        background-color: yellow !important;
        }
</style>

<div class="frontPage">


    <div class="panelGame">

      <div class="panelGame__image">
        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/panel_game.png" class="panel__background" alt="">

        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/animation_cloud1.png" class="panel__animation cloud--animation1 " alt="" >
        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/animation_cloud2.png" class="panel__animation cloud--animation2" alt="">
        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/animation_cloud3.png" class="panel__animation cloud--animation3" alt="">
        
        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/homePage_panel_boys.png" class="panel__animation boys--animation" alt="">
        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/homePage_panel_star1.png" class="panel__animation star1--animation" alt="">
        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/homePage_panel_star2.png" class="panel__animation star2--animation " alt="">
        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/homePage_panel_star3.png" class="panel__animation star3--animation" alt="">
        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/homePage_panel_star4.png" class="panel__animation star4--animation" alt="">
        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/homePage_panel_star4.png" class="panel__animation star5--animation" alt="">
        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/homePage_panel_star4.png" class="panel__animation star6--animation" alt="">

        <img src="<?php echo get_template_directory_uri()?>./assets/uploads/homePage_panel_tau.png" class="panel__animation tau--animation" alt="">


        <div class="panel_desc">
          <div>Pick the best game for your kid</div>
          <p>Make the time to be happier</p>
          <!-- <form method="POST"> -->
               
          <!-- </form> -->
          <a href="<?php echo get_home_url() ?>/games">
          <button class="btn__playGame" name="play" >
                        Play Now
                </button>
          </a>
        </div>
      </div>

    </div>


    <div class="typesGame">
        <li class="game__type-animal game__type">
          <a href="<?php echo get_template_directory_uri().'/introduction-about-how-to-play-games'; ?>">
            <img src="<?php echo get_template_directory_uri()?>./assets/uploads/game__type-animal.png" alt="">
            <h4> Game about animal</h4>
          </a>
       
 </li>
        <li class="game__type-character game__type">
        <a href="<?php echo get_template_directory_uri().'/introduction-about-how-to-play-games'; ?>">
            <img src="<?php echo get_template_directory_uri()?>./assets/uploads/game__type-character.png" alt="">
            <h4>Game about character</h4>
          </a>
        </li>
        <li class="game__type-computer game__type">
        <a href="<?php echo get_template_directory_uri().'/introduction-about-how-to-play-games'; ?>">
            <img src="<?php echo get_template_directory_uri()?>./assets/uploads/game__type-game.png" alt="">
            <h4>Game about computer</h4>
          </a>
        </li>
        <li class="game__type-racing game__type">
        <a href="<?php echo get_template_directory_uri().'/introduction-about-how-to-play-games'; ?>">
            <img src="<?php echo get_template_directory_uri()?>./assets/uploads/game__type-racing.png" alt="">
            <h4>Game about racing</h4>
          </a>
        </li>
        <li class="game__type-words game__type">
        <a href="<?php echo get_template_directory_uri().'/introduction-about-how-to-play-games'; ?>">
            <img src="<?php echo get_template_directory_uri()?>./assets/uploads/game__type-words.png" alt="">
            <h4>Game about words</h4>
          </a>
        </li>
    </div>


  </div>



<?php get_footer(); ?>