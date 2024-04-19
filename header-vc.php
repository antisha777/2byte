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

    <div class="video card">
        <video data-v-4e7c03c7="" playsinline="" muted="muted" autoplay="autoplay" loop="loop" src="<?php echo get_template_directory_uri() ?>/assests/video/vc.mp4">
        </video>
    </div>
        
        <?php include (TEMPLATEPATH . '/template-parts/menu-top.php'); ?>
        <!-- end container-menu -->
        
        <div class="container">
            <?php include (TEMPLATEPATH . '/template-parts/header-vcard.php'); ?>
        </div>

    </header>