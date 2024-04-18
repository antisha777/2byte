<div class="container-menu">

    <div class="header__top">
            
        <div class="header__logo">
            <?php the_custom_logo (); ?>
        </div>
        <!-- end header__logo -->
        <div class="header__menu">

            <?php include (TEMPLATEPATH . '/template-parts/nav.php'); ?>
            <!-- end php-code-nav -->                        
        </div>
        <!-- end header__menu -->
        <div class="header-phone">
            <?php dynamic_sidebar( 'sidebar-telephone' ); ?>
        </div>
        <!-- end header-phone -->
        <?php include (TEMPLATEPATH . '/template-parts/burger.php'); ?>

    </div>  
    <!-- end header__top -->
</div>