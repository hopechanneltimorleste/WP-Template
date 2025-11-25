<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('d-flex flex-column min-vh-100'); ?>>
<?php wp_body_open(); ?>

<header class="border-bottom bg-white py-3">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">

            <!-- Site name / logo -->
            <a href="<?php echo home_url('/'); ?>" class="text-decoration-none fw-bold">
                <?php bloginfo('name'); ?>
            </a>

            <!-- ALWAYS VISIBLE MENU – NO HIDING -->
            <nav class="text-end">
                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'container'       => false,
                    'menu_class'      => 'd-flex flex-wrap gap-4 list-unstyled mb-0',
                    'fallback_cb'     => function() {
                        // This shows if no menu is assigned – helps debugging
                        echo '<ul class="d-flex flex-wrap gap-4 list-unstyled mb-0">';
                        wp_list_pages( 'title_li=&depth=1' );
                        echo '</ul>';
                    },
                ) );
                ?>
            </nav>

        </div>
    </div>
</header>