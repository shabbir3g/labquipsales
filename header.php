<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
	*
	* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	*
	* @package labquipsales
	*/
	?>
	<!doctype html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		
	
	<?php wp_head(); ?>	
		
	</head>
	<body <?php body_class(); ?>>
		<div id="WebSiteHeaderInner" class="WebSiteHeaderInner">
			<div id="DesignImage1" class="GC87 DesignImage1">
				<div class="right-topicons" >
					<div id="MiniCart" class="GC36 MiniCartEdit" style="display: block; color: rgb(255, 255, 255);">
						<div id="MiniCartTotal" class="MiniCartTotal">

							<a href="#" class="MiniCartLink MiniCartInner" title="My cart">
								<i id="MiniCartIcon" class="GC14 sf-corner icon-cart MiniCartDesignImage1" style="color: rgb(255, 255, 255);"></i>
								<span class="GC14 MiniCartTotalItemsQuantity sf-corner" style="color: rgb(255, 255, 255);"> <?php echo WC()->cart->get_cart_contents_count();  ?> </span>
							</a>
							
						</div>

					</div>
					<div id="SwitchCurrency">
						<a href="#" class="SwitchCurrencyLink" title="Select your currency">
							<i id="currencySymbol" class="GC14 currencySymbol"><?php currency_my_function( ) ; ?></i>
						</a>
					</div>
				</div>
				<div class="title-wrapper">
					<div id="CompanyImage" class="">
						<?php $logo_uploader = get_field('logo_uploader','options'); 
						if( $logo_uploader): ?>
							<a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>">
								<img width="252" height="100" src="<?php echo $logo_uploader['url']; ?>"  />
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div id="DesignImage3" class="GC88 DesignBar3">
				<div id="DesignImage3" class="GC88 DesignImage3Full"></div>
				<div id="Search" class="GC22">
					<form name="search">
						<input class="GC22 SearchTextField" type="text" id="phrase" name="phrase" size="12" maxlength="40" placeholder="Search Phrase" />
						<a id="searchIcon" class="GC86 icon-search2 SearchButton" title="Find" href="#"></a>
					</form>
				</div>
				<div class="drop-down">
					<a id="sidemap-button" href="#Sidemap" title="Menu"><i class="icon-menu7"></i></a>
				</div>


				<?php 

				wp_nav_menu([
					'theme_location'		=> 'main-menu',
					'menu_class'			=> 'main-menu',
					'fallback_cb'			=> 'default_menu',
				]);


				 ?>

				<!--<ul class="main-menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Balances A&D</a></li>
					<li><a href="#">Equipment</a></li>
					<li><a href="#">Filtration & Vials</a></li>
					<li><a href="#">Lab Products</a> 
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Balances A&D</a></li>
							<li><a href="#">Equipment</a></li>
							<li><a href="#">Filtration & Vials</a></li>
							<li><a href="#">Lab Products</a> 
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Balances A&D</a></li>
									<li><a href="#">Equipment</a></li>
									<li><a href="#">Filtration & Vials</a></li>
									<li><a href="#">Lab Products</a></li>
									<li><a href="#">Liquid Handling</a></li>
									<li><a href="#">Meters & Electrodes:</a></li>
									<li><a href="#">Special Offers</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</li>
							<li><a href="#">Liquid Handling</a></li>
							<li><a href="#">Meters & Electrodes:</a></li>
							<li><a href="#">Special Offers</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</li>
					<li><a href="#">Liquid Handling</a></li>
					<li><a href="#">Meters & Electrodes:</a></li>
					<li><a href="#">Special Offers</a></li>
					<li><a href="#">Contact</a></li>
				</ul> -->
			</div>