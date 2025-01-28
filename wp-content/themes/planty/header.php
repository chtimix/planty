<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div id="branding">
                    <a href="<?php echo get_site_url();?>">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/images/logo-planty.png" alt="Logo planty" >
                    </a>
            </div>
            <!-- Toggle Menu -->
            <input type="checkbox" id="menu-toggle" aria-label="Ouvrir le menu">
                <label for="menu-toggle" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
            </nav>
        </header>
        <div id="container">
            <main id="content" role="main">