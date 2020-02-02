
<nav>
    <a href="<?php echo get_site_url();?>/" class="brand">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/brand.png" alt="DH Corp">
    </a>

    <?php wp_nav_menu( array(
        'theme_location' => 'main',
        'container' => false,
        'menu_class' => 'list-items'
        ));
    ?>
   
</nav>
<nav class="menu-mobile">
    <h3 id="menu-toggle"></h3>
    <?php wp_nav_menu( array(
        'theme_location' => 'main',
        'container' => false,
        'menu_class' => 'list-items',
        'menu_id' => 'menu'
        ));
    ?>
</nav>
<div class="social-network">
    <a href="#">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/sn-facebook.png" alt="DH Corp Facebook">
    </a>
    <a href="#">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/sn-twitter.png" alt="DH Corp Twitter">
    </a>
    <a href="#">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/sn-instagram.png" alt="DH Corp Instagram">
    </a>
</div>