<?php
/**
* Sean Anteau
* Template header
**/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <title>Sean Anteau - Front End Web Developer</title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Google Fonts Roboto Mono -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300,100,500|Roboto:400,300,100,500' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1 class="blog-name"><?php bloginfo( 'name' ); ?></h1>
            <span class="job-title">Front End Web Developer</span>
            <nav class="main-nav">
                <ul class="nav-list">
                    <li class="nav-list-item"><a class="nav-list-item-anchor" href=""><span class="glyphicon glyphicon-console"></span>Skills</a></li>
                    <li class="nav-list-item"><a class="nav-list-item-anchor" href=""><span class="glyphicon glyphicon-picture"></span>Experience</a></li>
                    <li class="nav-list-item"><a class="nav-list-item-anchor" href=""><span class="glyphicon glyphicon-user"></span>About Me</a></li>
                    <li class="nav-list-item"><a class="nav-list-item-anchor" href=""><span class="glyphicon glyphicon-download-alt"></span>Downloads</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="page">
