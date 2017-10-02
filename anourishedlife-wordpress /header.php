<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ANourishedLife
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/custom.js"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/custom.js"></script>
	


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'anourishedlife' ); ?></a>

	  <header>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#"><b></b></a>
                
                    <ul class="nav text-dark" style="">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"><i class="fa d-inline fa-lg fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"><i class="fa d-inline fa-lg fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"><i class="fa d-inline fa-lg fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"><i class="fa d-inline fa-lg fa-pinterest"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"><i class="fa d-inline fa-lg fa-envelope-o"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container py-3 text-center">
            <div class="row">
                <div class="col-md-12 text-white">
                    <a href="<?php echo home_url(); ?>">
                    <img class="img-fluid d-block mx-auto header-image-home" width="50%" src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo $image[0]; ?>">
                    </a>

                    <p class=" text-dark"><?php bloginfo( $show = 'description') ?></p>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light nav-border-top-bottom">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
                    <div class="navbar-nav">
                    <?php
                    
                    wp_nav_menu( array(
                        'theme_location'   => 'Menu-primary',
                        'container'  => 'nav',
                        'container_class' => 'navbar-collapse', //This is where the classes for the container go that we set up in bootstrap
                        'menu_class' => 'nav navbar-nav main-navbar-items', //This is where the classes for the ul element go
                     ) );
                    ?>

                        
                           
                        <form role="search" method="get" class="search-form" action="<?php get_site_url();?>">
                       
                            <li class="nav-item">
                            <buttom class="nav-link search-to-reveal"  href=""><i class="fa  fa-lg fa-search m-1"></i></button>
                            </li>
                            
                            <label class="hidden-search">
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field form-control" placeholder="Search …" value="" name="s">
                            </label>
                            
                            <!--<input type="submit" class="search-submit btn btn-secondary" value="Search">-->
			            </form>


                    </div>
                </div>
            </div>
        </nav>
    </header>
    