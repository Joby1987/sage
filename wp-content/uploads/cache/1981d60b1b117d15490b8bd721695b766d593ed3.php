<header class="banner">
  <div class="container">
  <div class="header-logo offset-sm-0 col-sm-3 col-md-3 col-5 offset-4 col-lg-2 offset-lg-0">
		  <a class="brand" href="<?php echo e(home_url('/')); ?>">
		    <img src="http://localhost/sage/images/sage logo.jpg" class="img-fluid" alt="Placeholder image"></a>
	   
    </div>
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
	 
    </nav>
  </div>
</header>
