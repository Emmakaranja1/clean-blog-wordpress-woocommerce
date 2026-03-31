<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="masthead">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
    
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a>

    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      
      <div class="collapse navbar-collapse" id="main-navbar">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0', 
          'container' => false, 
          'fallback_cb' => '__return_false',
          'depth' => 2,
        ));
        ?>
      </div>
    </div>
  </nav>
</header>
