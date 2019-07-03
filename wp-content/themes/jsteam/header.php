<html>
<head>
<!-- FontAwesome Icons -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
      
        <?php
						wp_nav_menu( array(	
							'theme_location'	=> 'primary',
              'container'			=> 'nav',
							'container_class'	=> 'collapse navbar-collapse',
							'menu_class'		=> 'navbar-nav ml-auto'
							

						) );
					?>
     
  </div>
</nav>
 