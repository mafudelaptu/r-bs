<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
    <![endif]-->

    <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php

    get_template_part('templates/header');
    
    ?>
      
    <div class="wrap container pl0 pr0" role="document">
    <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
      <div class="row">
        <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-12  pl0 ml15 mr-15 mt1" id="prim_navi">
              <nav class="nav-main" role="navigation">
                <?php
                if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => ''));
                endif;
                ?>
              </nav>   
            </div>
          </div>
          
          <div class="content">
            <?php include roots_template_path(); ?>
          </div><!-- /.content -->

        </div>
        <?php if (roots_display_sidebar()) : ?>
        <div class=" <?php echo roots_sidebar_class(); ?>">
          <aside class="sidebar pl0 mt1" role="complementary">
            <?php include roots_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        </div>
      <?php endif; ?>
    </div><!-- /.wrap -->
  <?php get_template_part('templates/footer'); ?>
    </div>



</body>
</html>
