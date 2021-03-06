<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <title>New Theme</title>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/assets/js/bootstrap.js'; ?>">
        </script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css'; ?>">
    </head>
<body id="body"
    <?php body_class(); ?>>
		<div id="page" class="site">
			<div class="site-inner">
			<header id="masthead" class="site-header">
			<div class="container">
				<nav id="site-navigation" class="main-navigation left-menu">
                    <ul id="primary-menu" class="menu nav-menu">
                        <li id="menu-item-128" class="fa-home menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-128"><a href="<?php echo get_home_url() ?>" aria-current="page">Home</a></li>
                        <li id="menu-item-262" class="fa-archive menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="<?php echo get_home_url() ?>/blogs">Blogs</a></li>
                        <li id="menu-item-129" class="fa-gamepad menu-item menu-item-type-custom menu-item-object-custom menu-item-129"><a href="<?php echo get_home_url() ?>/games">Games</a></li>
                        <li id="menu-item-256" class="fa-book menu-item menu-item-type-custom menu-item-object-custom menu-item-256"><a href="<?php echo get_home_url() ?>/courses">Courses</a></li>
                    </ul>
                </nav>
        		<div class="site-branding">
          			<div class="site-logo">
                        <a href="<?php echo get_home_url() ?>"><img src="<?php echo get_stylesheet_directory_uri().'/assets/uploads/BEE.png'; ?>" class="custom-logo" alt="Game For Kids"></img></a>
                    </div>
                <div id="site-header">
                    <h1 class="site-title"><a href="<?php echo get_home_url() ?>" rel="home">Game For Kids</a></h1>
                </div>
        		</div>

        		<nav class="main-navigation right-menu">
                    <ul id="menu-header-right-menu" class="menu nav-menu">
                        <li id="menu-item-258" class="fa-info-circle menu-item menu-item-type-post_type menu-item-object-page menu-item-258"><a href="<?php echo get_home_url() ?>/info">Info</a></li>
                        <li id="menu-item-259" class="fa-envelope menu-item menu-item-type-post_type menu-item-object-page menu-item-259"><a href="<?php echo get_home_url() ?>/contact">Contact</a></li>
                        <?php if ( is_user_logged_in() ) { ?>
                            <li id="menu-item-260" class="fa-user menu-item menu-item-type-post_type menu-item-object-page menu-item-260"><a href="#"><?php global $current_user; wp_get_current_user(); echo $current_user->user_login;?></a></li>
                            <li id="menu-item-261" class="fa-sign-out menu-item menu-item-type-post_type menu-item-object-page menu-item-260"><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
                        <?php } else { ?>
                            <li id="menu-item-262" class="fa-sign-in menu-item menu-item-type-post_type menu-item-object-page menu-item-260"><a href="<?php echo get_home_url() ?>/login">Login</a></li>
                            <li id="menu-item-253" class="fa-user-plus menu-item menu-item-type-custom menu-item-object-custom menu-item-257"><a href="<?php echo get_home_url() ?>/register">Register</a></li>
                        <?php } ?>
                    </ul>
                </nav>
			</div>
		    </header>
	    

	    <nav id="sidr-right-top" class="mobile-menu sidr right">
	      	<div class="site-branding text-center">
                <div class="site-logo">
                <a href="<?php echo get_home_url() ?>" class="custom-logo-link" rel="home" aria-current="page"><img width="208" height="63" src="<?php echo get_stylesheet_directory_uri().'/assets/uploads/BEE.png'; ?>" class="custom-logo" alt="Game For Kids"></a>	          		</div>
                        <div id="mobile-site-header">
                            Game For Kids
                        </div>
            </div>     
        </nav>
        
        <nav class="navbar navbar-light bg-light navbar-expand-sm">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-list-2">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo get_home_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url() ?>/blogs">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url() ?>/games">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url() ?>/courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url() ?>/info">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url() ?>/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url() ?>/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url() ?>/register">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    
</div>
</div>
                        
                


		
	