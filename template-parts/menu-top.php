<div class="container-menu">
    <div class="header__top">
                        
        <div class="header__logo">
            <?php the_custom_logo (); ?>
        </div>
        <!-- end header__logo -->
        <div class="header__menu">

            <div class="php-code-nav">

                <?php wp_nav_menu( array (
                    'theme_location'  => 'menu-1',
                    'container'       => 'div',
                    'container_class' => 'navigation  header__nav header__nav_none navigation-top',
                    'menu_class'      => 'navigation-top-list',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',

                ) ); ?>

            </div>
            <!-- end php-code-nav -->                        
        </div>
        <!-- end header__menu -->
        <div class="header-phone">
            <?php dynamic_sidebar( 'sidebar-telephone' ); ?>
        </div>
        <!-- end header-phone -->
        <?php include (TEMPLATEPATH . '/template-parts/burger.php'); ?>

    </div>
</div>
