<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <link rel="stylesheet" href=<?php bloginfo('stylesheet_url'); ?>>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Signika:wght@500;613&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body>

<div id="outer-wrapper">
        <header>
            <nav id="nav-wrapper">

                <a href="<?php echo site_url(); ?>">
                    <h4>Fundamental Scuba</h4>
                </a>
                
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Certification</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
                
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

            </nav>

        
        </header>

        