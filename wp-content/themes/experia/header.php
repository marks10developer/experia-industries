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
	<div class="loader">
		 <div class="loader-img"></div>
	</div>
	<header>
			<div class="secondary-menu-primary hidden animated">
				<div class="bg-overlay"></div>
				<?php $main_menu_items = wp_get_nav_menu_items('Main Menu'); ?>
				<ul>
					<?php if(!empty($main_menu_items)) {  ?>
					<?php foreach($main_menu_items as $index =>  $item){ ?>
						<?php if($index == 2){ ?>
							<li><a href="<?php echo $item->url; ?>" class="hvr-grow"><?php echo $item->title; ?></a></li>
							<li class="menu-logo">
									<a><img src="<?php echo get_template_directory_uri();?>/images/Experia-Aircon-3.png" /></a>
							</li> 
						<?php } else { ?>
							<li><a href="<?php echo $item->url; ?>" class="hvr-grow"><?php echo $item->title; ?></a></li> 
						<?php } ?>				
					<?php } ?> 
				<?php } ?>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="secondary-menu-alt <?php echo is_front_page() ? 'front-page' : ''; ?> hidden animated fadeInDown">
				<div class="bg-overlay"></div>
				<ul>
					<?php if(!empty($main_menu_items)) {  ?>
					<?php foreach($main_menu_items as $index =>  $item){ ?>
						<?php if($index == 2){ ?>
							<li><a href="<?php echo $item->url; ?>" class="hvr-grow"><?php echo $item->title; ?></a></li>
							<li class="menu-logo">
									<a><img src="<?php echo get_template_directory_uri();?>/images/Experia-Aircon-2.png" /></a>
							</li> 
						<?php } else { ?>
							<li><a href="<?php echo $item->url; ?>" class="hvr-grow"><?php echo $item->title; ?></a></li> 
						<?php } ?>				
					<?php } ?> 
				<?php } ?>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="main-menu short hidden animated">
				<div class="menu-contents">
					<div class="logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" /></div>
					<div class="menu-list">
						<ul>
							<li class="animated hidden"><a href="" class="hvr-grow">Airconditioning</a></li>
							<li class="animated hidden"><a href="" class="hvr-grow">Elevator</a></li>
							<li class="animated hidden"><a href="" class="hvr-grow">Contact Us</a></li>
						</ul>
					</div>
					<div class="main-menu-box hamburger hamburger--spin">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</div>
				</div> 
			</div>  
		</header>
	<div class="main-container hidden">
		
 

<div class="clear"></div>
 