<?php
/**
 * 
 * Template Name: Ремонт
 *
 */

get_header();
?>

<main class="main">
    <section id="about" class="section">
        <div class="container">
            <div class="section__inner">
                <div class="about">
                    <div class="about__content about__content_page">
                        <h2 class="about-title"><?php the_title(); ?></h2>
                        <div class="expandable-text about__text2"><?php the_content(); ?></div>
                    </div>
                    <div class="saidebar saidebar-right-none"><?php get_sidebar('category'); ?></div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();?>
