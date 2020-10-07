<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>浅野智貴｜高専生エンジニア</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/portforio.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/pace.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>
    <div id="cursor"></div>
    <div id="global-container">
        <div id="container">
            <div class="mobile-menu__cover"></div>
            <header class="header">
                <!-- ナビメニュー部分 -->
                <nav class="navMenu">
                    <ul>
                        <li>
                            <a href="https://twitter.com/tomokiAnct">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/asanotomoki">
                                <i class="fab fa-github"></i>
                            </a></li>
                    </ul>

                    <nav class="ham">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'place_global',
                                'container' => false,
                            )
                        );
                        ?>
                    </nav>
                    <button class="mobile-menu__btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </nav>
            </header>