<?php
/*

*/


if(!function_exists('kids_education_setup')):
    /*
     Sets up theme defaults and registers support for various WordPress features
    */
    function kids_education_setup(){
        load_theme_textdomain( 'kids-education', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );

        // This setup supports logo, site-title & site-description
        add_theme_support( 'custom-logo', array(
            'height'      => 70,
            'width'       => 120,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );

        add_editor_style( array( '/assets/plugins/unminified/css/editor-style.css', kids_education_fonts_url() ) );

        add_theme_support( 'post-thumbnails' );
        add_theme_support('editor-styles');
        add_theme_support( 'wp-block-styles' );
        
        /**
        @ add theme support 
        **/
        add_theme_support('post-formats',array(
            'image',
            'gallery',
            'link',
            'iframe'
        ));
    }
endif;
add_action( 'after_setup_theme', 'kids_education_setup' );



if ( ! function_exists( 'kids_education_fonts_url' ) ) :
    /**
     * Register Google fonts
     *
     * @return string Google fonts URL for the theme.
     */
    function kids_education_fonts_url() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';
    
        /* translators: If there are characters in your language that are not supported by Montserrat Sans, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Montserrat Alternates font: on or off', 'kids-education' ) ) {
            $fonts[] = 'Montserrat Alternates';
        }
    
        /* translators: If there are characters in your language that are not supported by Courgette, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Courgette font: on or off', 'kids-education' ) ) {
            $fonts[] = 'Courgette';
        }
    
        /* translators: If there are characters in your language that are not supported by Roboto, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Roboto Condensed font: on or off', 'kids-education' ) ) {
            $fonts[] = 'Roboto Condensed';
        }
    
        /* translators: If there are characters in your language that are not supported by Raleway, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Raleway font: on or off', 'kids-education' ) ) {
            $fonts[] = 'Raleway';
        }
    
        /* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'kids-education' ) ) {
            $fonts[] = 'Poppins';
        }
    
        /* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Titillium Web font: on or off', 'kids-education' ) ) {
            $fonts[] = 'Titillium Web';
        }
    
        /* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Shadows Into Light: on or off', 'kids-education' ) ) {
            $fonts[] = 'Shadows Into Light';
        }
    
        /* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Atma: on or off', 'kids-education' ) ) {
            $fonts[] = 'Atma';
        }
        
        /* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Indie Flower: on or off', 'kids-education' ) ) {
            $fonts[] = 'Indie Flower';
        }
        
        /* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Pacifico: on or off', 'kids-education' ) ) {
            $fonts[] = 'Pacifico';
        }
    
        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( $subsets ),
            ), 'https://fonts.googleapis.com/css?family=' );
        }
    
        return $fonts_url;
    }
endif;

/**
 * Enqueue scripts and styles.
 */
function kids_education_scripts() {
	
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'kids-education-fonts', kids_education_fonts_url(), array(), null );

	// Add font awesome css
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/plugins/minified/css/font-awesome.min.css', array(), '4.6.3' ); 

	// blocks
	wp_enqueue_style( 'kids-education-blocks', get_template_directory_uri() . '/assets/plugins/minified/css/blocks.min.css', array(), '' );

	// Add slick css
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/plugins/minified/css/slick.min.css', array(), '' );

	// Add slick-theme css
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/plugins/minified/css/slick-theme.min.css', array(), '' );
    
    //Add stylesheet css
    wp_register_style('style', get_template_directory_uri() . '/style.css',
    array(), false, 'all');
    wp_enqueue_style('style');

    /**
        @ add style about reset  and content-single
    **/
    wp_enqueue_style( 'content-single-style', get_template_directory_uri() . '/assets/css/content-single.css', array(), '' );
    wp_enqueue_style( 'reset-content-single-style', get_template_directory_uri() . '/assets/css/reset.css', array(), '' );

    wp_enqueue_style( 'front-page-style', get_template_directory_uri() . '/assets/css/front-page.css', array(), '' );

    wp_enqueue_style( 'page-intro-style', get_template_directory_uri() . '/assets/css/page-intro.css', array(), '' );
    
    //scripts 
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/preload.js',array(),false,'all');

    wp_enqueue_script( 'script-2', get_template_directory_uri() . '/assets/js/script.js',array(),false,'all');
    
    
	// Add jquery-sidr-light css
	wp_enqueue_style( 'jquery-sidr-light', get_template_directory_uri() . '/assets/plugins/minified/css/jquery.sidr.light.min.css', array(), '' ); 

	// Add lightbox css
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/assets/plugins/minified/css/lightbox.min.css', array(), '' );           

	wp_enqueue_style( 'kids-education-style', get_stylesheet_uri() );

	// Add blue color 
	wp_enqueue_style( 'kids-education-blue-style', get_template_directory_uri() . '/assets/colors/blue.min.css', array(), '' );

	// Load sidr js
	wp_enqueue_script( 'jquery-sidr', get_template_directory_uri() . '/assets/plugins/minified/js/jquery.sidr.min.js', array( 'jquery' ), '', true );

	// Load slick js
	wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/assets/plugins/minified/js/slick.min.js', array( 'jquery' ), '', true );

	// Load isotope js
	wp_enqueue_script( 'jquery-isotope', get_template_directory_uri() . '/assets/plugins/minified/js/isotope.min.js', array( 'jquery' ), '', true );

	// Load lightbox js
	wp_enqueue_script( 'jquery-lightbox', get_template_directory_uri() . '/assets/plugins/minified/js/lightbox.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'imagesloaded.pkgd', get_template_directory_uri() . '/assets/plugins/minified/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );

	// Load jquery matchheight
	wp_enqueue_script( 'jquery-matchHeight', get_template_directory_uri() . '/assets/plugins/minified/js/jquery-matchHeight.min.js', array( 'jquery' ), '', true );
	
	// Load jquery-ui js
	wp_enqueue_script( 'jquery-ui-datepicker' );

	// Load custom js
	wp_enqueue_script( 'kids-education-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '',true );

	// Load the html5 shiv.
	wp_enqueue_script( 'kids-education-html5', get_template_directory_uri() . '/assets/js/html5.min.js', array(), '3.7.3' );
	wp_script_add_data( 'kids-education-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'kids-education-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.min.js', array(), '', true );

	wp_enqueue_script( 'kids-education-navigation', get_template_directory_uri() . '/assets/js/navigation.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kids_education_scripts' );


if( !function_exists('kids_game_pagination')){
    function kids_game_pagination(){
        if( $GLOBALS['wp_query'] ->max_num_pages < 2){
            return '';
        }?>
        <nav class="pagination" role = "navigation"> 
            <?php if( get_previous_posts_link()) : ?>
                <div class="next"> <?php previous_posts_link( __(' < ','kidsgame')) ?> </div>
            <?php endif ?> 
            <?php if(get_next_posts_link()) : ?>
                <div class="prev"> <?php next_posts_link( __(' > ','kidsgame')) ?> </div>
            <?php endif ?>
            
        </nav>
    <?php 
    }
}



/* Tự động chuyển đến một trang khác sau khi login */
function my_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    global $user;
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
            //check for admins
            if ( in_array( 'administrator', $user->roles ) ) {
                    // redirect them to the default place
                    return admin_url();
            } else {
                    return home_url();
            }
    } else {
            return $redirect_to;
    }
}

add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

function redirect_login_page() {
$login_page  = home_url( '/login-page/' );
$page_viewed = basename($_SERVER['REQUEST_URI']);  

if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
    wp_redirect($login_page);
    exit;
}
}
add_action('init','redirect_login_page');
/* Kiểm tra lỗi đăng nhập */
function login_failed() {
$login_page  = home_url( '/login-page/' );
wp_redirect( $login_page . '?login=failed' );
exit;
}
add_action( 'wp_login_failed', 'login_failed' );  

function verify_username_password( $user, $username, $password ) {
$login_page  = home_url( '/login-page/' );
if( $username == "" || $password == "" ) {
    wp_redirect( $login_page . "?login=empty" );
    exit;
}
}
add_filter( 'authenticate', 'verify_username_password', 1, 3);

function redirect_register_page() {
$login_page  = home_url( '/register-page/' );
$page_viewed = basename($_SERVER['REQUEST_URI']);  

if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
    wp_redirect($login_page);
    exit;
}
}

/* Just display admin bar if user login as adminitrator  */
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
show_admin_bar(false);
}
}

function wpcf_is_404( $url = null ){
    $code = '';
    if( is_null( $url ) ){
        return false;
    }else{
        $handle = curl_init($url);
        curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
        curl_exec($handle);
        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
        if( $code == '404' ){
            return wp_redirect("404-page");
        }else{
            return false;
        }
        curl_close($handle);
    }
}


/** codfe.com - thiết lập hình ảnh làm thumbnail mặt định**/
add_filter( 'post_thumbnail_html', 'wpsites_default_post_image' );
 
function wpsites_default_post_image( $html ) {
 
	if ( empty( $html ) )
		$html = '<img src="<span style="color: #ed1c24;" data-mce-style="color: #ed1c24;">' . trailingslashit( get_stylesheet_directory_uri() ) . 'images/default-image.png</span>' . '" alt="enter your alt text here" />';
 
	return $html;
}



?>