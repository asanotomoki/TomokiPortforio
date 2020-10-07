            </main>
            <footer>
                <div id="top_scroll">^</div>
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
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'place_global',
                            'container' => false,
                        )
                    );
                    ?>
                </nav>
            </footer>
            </div>
            <nav class="mobile-menu">
                <ul class="mobile-menu__main">
                <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'place_global',
                                'container' => false,
                            )
                        );
                        ?>
                </ul>
            </nav>
            </div>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/cursor.js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll.js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/style.js"></script>
            </body>

            </html>