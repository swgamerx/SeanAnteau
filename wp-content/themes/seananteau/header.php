<?php
/**
* Sean Anteau
* Template header
**/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Google Fonts Roboto Mono -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300,100,500|Roboto:400,300,100,500' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
