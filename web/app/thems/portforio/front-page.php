<!DOCTIPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>浅野智貴｜Tomoki's Portforio</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/portforio.css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>
    <body>
        <div id="cursor"></div>
        <main>
            <section id="home" class="home">
                <div class="home_caption">
                    <h2>TOMOKI's<br>PORTFORIO </h2>
                </div>
                <div class="top_movie">
                    <video class="show_pc show_pc1" autoplay="" muted="" playsinline="" preload="auto">
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/images/World%20-%201992.mp4">
                    </video>
                    <video class="show_pc show_pc2" loop autoplay="" muted="" playsinline="" preload="auto">
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/images/Black%20-%2013495.mp4">
                    </video>
                </div>
                <nav class="header_nav">
                <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'place_global',
                                'container' => false,
                            )
                        );
                        ?>
                </nav>
            </section>
        </main>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/cursor.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/style.js"></script>
    </body>

    </html>