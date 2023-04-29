<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="header-left">
      <img src="<?php echo get_template_directory_uri().'/assets/images/logo1.png'; ?>"alt="Logo" title="IRollDownUnder"/>
    </div>
    <nav>
      <?php wp_nav_menu( array( 'menu_class' => 'navbar-nav mx-lg-auto', 'container' => 'ul', )); ?>
    </nav>
    <div class="header-right">
        <p class="phone-number">02 0000 0000</p>
    </div>
  </header>
