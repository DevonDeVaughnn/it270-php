<!DOCTYPE html>
<html <?php language_attributes() ;?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">
    <?php wp_head();  ?>
</head>

<body <?php body_class();?>>
    <header>
        <div id="top"><?php get_search_form();?></div>
        <!-- end top -->
        <div class="inner-header">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php get_template_directory_uri();?>/images/logo.png"
                    id="logo" alt="logo">

            </a>
            <nav id="site-navigation" class="main-navigation">
                <button class="nav-button">Toggle Navigation</button>
                <?php
             $args_primary=array(
            'theme_location'=>'primary',
            'items_wrap'=>'<ul class="primary-nav">%3$s</ul>'
        );
        ?>
                <?php wp_nav_menu($args_primary);?>
            </nav>
        </div>

    </header>