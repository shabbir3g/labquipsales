<?php 


	
	remove_action('woocommerce_before_main_content','woocommerce_output_content_wrapper', 10);
	remove_action('woocommerce_after_main_content','woocommerce_output_content_wrapper_end', 10);
	remove_action('woocommerce_before_shop_loop','woocommerce_result_count', 20);
	remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering', 30);



	remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash', 10);
	remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail', 10);
	remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10);
	remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price', 10);
	remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5);
	remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart', 10);




	//remove_action('woocommerce_single_product_summary','woocommerce_template_single_title', 5);
	//remove_action('woocommerce_single_product_summary','woocommerce_template_single_rating', 10);
	//remove_action('woocommerce_single_product_summary','woocommerce_template_single_price', 10);
	remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);
	//remove_action('woocommerce_single_product_summary','woocommerce_template_single_add_to_cart', 30);
	remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta', 40);
	//remove_action('woocommerce_single_product_summary','woocommerce_template_single_sharing', 50);



	//remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash', 10);
	//remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_images', 20);



	//remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs', 10);
	//remove_action('woocommerce_after_single_product_summary','woocommerce_upsell_display', 15);
	remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products', 20);














?>