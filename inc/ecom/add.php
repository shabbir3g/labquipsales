<?php 



	add_action('woocommerce_before_main_content', function(){ ?>


		<div id="WebSiteContent asas" class="GC1">
		<div id="Content" class="GC24 ContentBody">

	<?php 

	}, 10);

	add_action('woocommerce_before_main_content', function(){ ?>


		<div class="GC6 Breadcrumbs" ID="Breadcrumbs-D319">
			<div class="BreadcrumbsTrail">
				<nobr>

	<?php 

	}, 19);


	add_action('woocommerce_before_main_content', function(){ ?>

		</nobr>
		</div>
		</div>

	<?php 

	}, 21);


	add_action('woocommerce_after_main_content', function(){ ?>


		</div>
		</div>

	<?php 

	}, 10);


	

	add_action('woocommerce_shop_loop_item_title', function(){ ?>

		<div id="ProductImageContainer-P3578" class=" ProductImageContainer">
			<div style="position:relative;z-index:1;" class="ImgLink">
				<div id="ProductImage-P3578" class="ProductImage">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
			</div>
		</div>
		<div class="GC20 ProductPrice" id="ProductPrice-P3578">
			<span><?php global $product; echo $product->get_price_html(); ?></span>
		</div>
		<!--<div class="GC55 ProductPriceOtherInformation">
			<span><span>A$</span>43.64</span>
			<span class="ProductPriceTaxPriceText">(excl. G.S.T.)</span>
		</div> -->
		<div class="ProductContainer3">
			<h3 class="GC37 ProductTitle"><?php the_title(); ?></h3>
		</div>
		<div class="GC11 ProductIntroduction" role="equalheight-in-normalview" itemprop="description" id="ProductIntroduction-P225" style="color: rgb(36, 36, 36);"><?php echo wp_trim_words(get_the_content(), 5, false); ?></div>
		<div id="ProductContainer2" class="ProductContainer2"> 
			<div class="GC13 sf-corner ProductMoreDetails" style="color: rgb(255, 255, 255);">
				<a href="<?php echo the_permalink(); ?>">More details</a>
			</div>
		</div>
	<?php 

	}, 10);




	add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
	
	
	
	
/**
 * custom_woocommerce_template_loop_add_to_cart
*/
function custom_woocommerce_product_add_to_cart_text() {
	global $product;
	
	$product_type = $product->product_type;
	
	switch ( $product_type ) {
		case 'external':
			return __( 'More details', 'woocommerce' );
		break;
		case 'grouped':
			return __( 'More details', 'woocommerce' );
		break;
		case 'simple':
			return __( 'More details', 'woocommerce' );
		break;
		case 'variable':
			return __( 'More details', 'woocommerce' );
		break;
		default:
			return __( 'More details', 'woocommerce' );
	}
	
}



/**
 * Custom currency and currency symbol
 */
add_filter( 'woocommerce_currencies', 'add_my_currency' );

	function add_my_currency( $currencies ) {
	     $currencies['ABC'] = __( 'Australian Dollar', 'woocommerce' );
	     return $currencies;
	}

	add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

	function add_my_currency_symbol( $currency_symbol, $currency ) {
	     switch( $currency ) {
	          case 'ABC': $currency_symbol = 'A$'; break;
	     }
	     return $currency_symbol;
	}


add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'my_wc_filter_dropdown_args', 10 );
function my_wc_filter_dropdown_args( $args ) {
    $args['show_option_none'] = 'Cat.No Price *';
    return $args;
}


/**
 * Only display minimum price for WooCommerce variable products
 **/
add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);
 
function custom_variation_price( $price, $product ) {
     
     $price = '';
 
			
     $price .= woocommerce_price($product->get_price());
 
     return $price;
}











?>