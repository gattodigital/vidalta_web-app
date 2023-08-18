<header class="app-header bg-dark">
    <div class="header-wrapper">
        <div class="header-navigation navbar navbar-expand-lg">
            <div class="header-brand col py-3">
            	<a href="">
            		<img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/brand/vidalta-logo_color.svg" alt="{Brand Name} Logo, color" >
            	</a>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headerMainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
						<span class="sr-only">Toggle navigation</span>
					</button>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'header-menu',
                        'container'       => 'nav',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'headerMainNav',
                        'menu_class'      => 'navbar-nav',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'add_li_class'    => 'nav-item', // Add class to <li> tags
                        'add_link_class'  => 'nav-link link-light' // Add class to <a> tags
                    )
                );
                ?>

        </div>
    </div>
</header>
