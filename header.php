<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">

    

        <!-- HEADER -->  

        <header class="PageHeader">     
        <div class="PageHeader__logo">
    <?php the_custom_logo(); ?> 
        </div>

        
    
        <!--NAVIGATION BAR-->

<nav id="menu-item" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" class="PageHeader__nav">
            <a class="PageHeader__nav-contact" href="nous-rencontrer">Nous rencontrer</a>
            <a class="PageHeader__nav-admin" href="admin">Admin</a>
            <a class="PageHeader__nav-command" href="commander">Commander</a>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
</nav>

</header>

<div id="container" class="test3">
<main id="content" role="main">

