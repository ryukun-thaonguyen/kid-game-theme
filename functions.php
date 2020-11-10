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

?>