<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twobytes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php include (TEMPLATEPATH . '/template-parts/head.php'); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
 <!-------------------------section heade------------------------->
 <header class="header">
        
        <div class="container-menu">
        <?php include (TEMPLATEPATH . '/template-parts/menu-top.php'); ?>
        <!-- end header__top -->
        </div>
        <!-- end container-menu -->
    

        <div class="container">
        <?php include (TEMPLATEPATH . '/template-parts/header-content.php'); ?>
        </div>


    </header>