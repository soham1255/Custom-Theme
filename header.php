<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Header Section Start -->
    <header class="header">
        <div class="header__main">
            <div class="container">
                <div class="row align-center">
                    <div class="col leftbar">
                        <?php
                        /** Logo */
                        $logo = cts_get_logo();
                        get_template_part('templates/header/header', 'logo', $logo);
                        ?>
                    </div>
                    <?php
                    /** Menu */
                    get_template_part('templates/header/header', 'navigations', $menu);
                    ?>
                </div>
            </div>
    </header>
    <!-- Header Section End -->
