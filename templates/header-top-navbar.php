<header class="bar-title">      
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'segmented-controller'));
          endif;
        ?>
</header>
