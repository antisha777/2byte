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
                <div class="content__left">
                    <div class="about">
                        <div class="about__content about__content_page">
                            <h2 class="about-title"><?php the_title(); ?></h2>
                            <div class="expandable-text about__text2"><?php the_content(); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer('front-new');?>
