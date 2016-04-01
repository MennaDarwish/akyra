<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

 
 
   <?php wp_head(); ?> 

 
    
</head>
<body <?php body_class(); ?> id="pageBody">
<div class="top-nav col-md-12 col-xs-12 col-no-margin">
                <div class="col-md-6 col-xs-6 col-no-margin">
                    <div class="col-md-10 col-md-offset-2 col-xs-12 col-no-margin">
                        
                        <span><a href="https://www.facebook.com/Duncanby-Lodge-323542898711/?fref=ts"><i class="blue-icon fa fa-facebook"></i></a></span>
                        <span><i class="white-icon fa fa-envelope-o"></i></span>
                        <span class="header-email">
                            <a class="anchor-style" href="mailto:admin@duncanby.com">admin@duncanby.com</a></span>
                    </div>
                    
                </div>
                <div class="col-md-6 col-xs-6 col-no-margin">
                    <div class="col-md-5 col-md-offset-7 col-xs-12 col-no-margin">
                    <i class="white-icon fa fa-phone"></i>
                    <span class="header-email"><a class="anchor-style" href="tel:+1.877.846.6548">Booking: +1.877.846.6548</a></span></div>
                </div>
</div>
  <!-- Navigation -->
    <nav class="navbar header navbar-inverse nav-color" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <?php if(get_theme_mod('akyra_logo')): ?> 
			   <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php echo '<img src="'.esc_url( get_theme_mod( 'akyra_logo' ) ).'">'; ?> </a>
			   <?php  else:  ?>  
			      <a class="navbar-brand" id="divSiteTitle" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php echo bloginfo('name');?> </a> <br> <a href="" class="desnav" id="divTagLine"> <?php echo bloginfo('description'); ?></a> 
               
                <?php endif; ?>   
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
              
              <?php 
			$defaults = array(
					'theme_location'  => 'primary',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="nav" class="nav navbar-nav navbar-right">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
					);
			wp_nav_menu($defaults); ?>
              
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

