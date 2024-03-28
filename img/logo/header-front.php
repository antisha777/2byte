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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
   <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92862030, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92862030" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
		<!-------------------------section heade------------------------->
        <header class="header">
            <div class="container">
                <div class="header__top">
                    <div class="white-stripe">
                        <div id="bar" class="bar-menu"></div>
                    </div>
                    <div class="mobile-menu">
                        <div class="bar-black-line"></div>
                        <div class="bar mobile-menu__burger"></div>
                        <ul  class="links-menu">
                            <li class="navigation__item"><a href="<?php bloginfo('url')?>" class="navigation__link">Главная</a></li>
                            <li class="navigation__item"><a href="#about" class="navigation__link">О нас</a></li>
                            <li class="navigation__item"><a href="#popular" class="navigation__link">Основные услуги</a></li>
                            <li class="navigation__item"><a href="#we" class="navigation__link">Нас выбирают</a></li>
                            <li class="navigation__item"><a href="#price" class="navigation__link"yu>Цены</a></li>
                            <li class="navigation__item"><a href="#contacts" class="navigation__link">Контакты</a></li>
                            <div class="widget widget_search search-bar">
                               <form class="search-bar__form" action="<?php echo get_home_url(); ?>">
                                    <input class="search-bar__input" type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder=" Поиск по сайту">
                                    <button type="submit" class="search-bar__button"></button>
                                </form>
                             </div>
                            <div class="saidebar">
                                <?php get_sidebar(''); ?>
                            </div>
                        </ul>
                    </div>
                    <div class="header__mobile">
                    	<?php the_custom_logo (); ?>
                        <div class="header__service"><a href="<?php bloginfo('url')?>" class="logo header__logo">
                            <!-- <img src="<?php echo get_template_directory_uri() ?>/assests/img/2.png"> -->
                       2 Байта</a>Сервисный центр
                        </div>
                    <div class="header__menu">
                        <nav id="nav" class="navigation  header__nav header__nav_none">
                            <ul class="navigation__list">
                                <li class="navigation__item"><a href="<?php bloginfo('url')?>" class="navigation__link">Главная</a></li>
                                <li class="navigation__item"><a href="#about" class="navigation__link">О нас</a></li>
                                <li class="navigation__item"><a href="#popular" class="navigation__link">Основные услуги</a></li>
                                <li class="navigation__item"><a href="#we" class="navigation__link">Нас выбирают</a></li>
                                <li class="navigation__item"><a href="#price" class="navigation__link"yu>Цены</a></li>
                                <li class="navigation__item"><a href="#contacts" class="navigation__link">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-phone">
                        <a href="tel:89521555936" class="header-phone__number">8 (952) 155-59-36</a>
                        <time class="header-phone__schedule">с 10.00 до 19.00 без выходных</time>
                    </div>
                </div>
                </div>
                <div class="header__content">
                    <div class="hero header__hero">
                        <div class="hero__binary">10101010101010</div>
                        <div class="hero__binary hero__binary_two">101001</div>
                        <h1 class="hero__title">Компьютерный сервис в Томске</h1>
                        <div class="hero__subtitle">Ремонт компьютеров, ноутбуков, телевизоров, телефонов, моноблоков</div>
                        <button data-fancybox data-src="#form" class="btn btn_large">Записаться онлайн</button>
                        <div class="hero__social">
                            <ul class="social social_horizon">
                                <li class="social__item"><a href="#"><img class="social__link" src="<?php echo get_template_directory_uri() ?>/assests/img/vk.png" alt="Vk"></a></li>
                                <li class="social__item"><a href="https://wa.me/79521555936?text=Здравствуйте%2C+у+меня+есть+вопрос"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/whats.png" alt="watsapp"></a></li>
                                <li class="social__item"><a href="#"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/telegram.png" alt="telegram"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__codepen">
                        <div class="header__wave"></div>
                        <!-- <img src="<?php echo get_template_directory_uri() ?>/assests/img/header-img.png" alt=""> -->
                        <video data-v-4e7c03c7="" playsinline="" muted="muted" autoplay="autoplay" loop="loop" src="<?php echo get_template_directory_uri() ?>/assests/video/rgb.mp4" style=""></video>
                    </div>
                    <ul class="social social_vertical header__social">
                        <li class="social__item"><a href="#"><img class="social__link" src="<?php echo get_template_directory_uri() ?>/assests/img/vk_w.png" alt="Vk"></a></li>
                        <li class="social__item"><a href="https://wa.me/79521555936?text=Здравствуйте%2C+у+меня+есть+вопрос"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/whats_w.png" alt="watsapp"></a></li>
                        <li class="social__item"><a href="#"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/telegram_w.png" alt="telegram"></a></li>
                    </ul>
                </div>
                        <div class="hero__triangle"></div>
                        <div class="hero__columns">
                            <div class="hero__item"><span>01</span>&nbsp;/&nbsp;Быстро</div>
                            <div class="hero__item"><span>02</span>&nbsp;/&nbsp;Качественно</div>
                            <div class="hero__item"><span>03</span>&nbsp;/&nbsp;Гарантия</div>
                        </div>
            </div>
            </header>
