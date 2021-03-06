<header class="banner" role="banner">

    <nav role="navigation" class="navbar navbar-inverse">
        
	   <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="brand navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <?php
	      if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
	      endif;
	      ?>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->

    </nav>
</header>
<div class="feature-box" style="background-image: url('/app/uploads/2015/08/Spartan_Race_-_Muddy_Hit-web.jpg'); background-size: cover;">
<img class="logo center-block" src="/app/uploads/2015/08/average-ocr_web.png" alt="average-ocr_web" width="150" height="150" />
</div>

	