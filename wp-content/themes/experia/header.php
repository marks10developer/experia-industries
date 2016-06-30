<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 
<title><?php bloginfo( 'sitename' ); ?> | <?php wp_title('', true,''); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header ">
  <div class="signin_wrap animated fadeInUp">
    <div class="topfirstbar">
		<div class="topbarleft">
		<a href="<?php echo get_site_url(); ?>">
		<?php
		  if ( function_exists('dynamic_sidebar') && is_active_sidebar("experia_logo") ) {
			  dynamic_sidebar('experia_logo');
		  }
		?>
		</a>
		</div>
		<div class="search-container">
			<form method="get" action="<?php echo get_site_url(); ?>">
				<div> 
					<input type="text" class="form-control" name="s" id="search" placeholder="Search" autocomplete="off" value="<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>"/>
					<input type="submit" id="searchsubmit" value="Search" class="hidden" >
				</div>
			</form>
		</div>
		</a>
      <div class="clear"></div>
    </div>
  </div>
  <!--end signin_wrap-->
  <div class="header-inner  animated fadeInUp">
  
    <div class="toggle">
	  <a class="toggleMenu" href="#">
		<i class="fa fa-navicon fa-2x"></i>
      </a>
	</div>
    <!-- toggle -->
    <div class="nav">
      <?php wp_nav_menu( array('menu' => 'Main Menu')); ?>
    <!-- nav -->
    <div class="clear"></div>
  </div>  <!-- header-inner --> 
</div><!-- header -->


<div class="clear"></div>
 