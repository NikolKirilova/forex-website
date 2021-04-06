<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class('test'); ?>>


  <header>
  <nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">

      

          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" class="img-fluid logo">
          </a>

         
          <a href="http://localhost/Forex/registration/"  class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <!-- these spans become the three lines -->
            <span> </span>
            <span> </span>
            <span> </span>
          </a>
           

<?php wp_nav_menu(

  array(

  'theme_location' => 'top-menu',
  'depth'             => 2,
  'container'         => 'div',
  'container_class'   => 'collapse navbar-collapse',
  'container_id'      => 'navbarResponsive',
  'menu_class'        => 'navbar-nav',
  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
  'walker'            => new WP_Bootstrap_Navwalker(),
    )
     ); ?>
		 
		
	 
         
      

        
      </div>
    </nav>
  </header>