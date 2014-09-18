<?php 
if( !class_exists("ModuleSample") ) {
	class ModuleSample { 
		public static function getModules(){ 
			$modules = array(
				'banner',
				'category',
				'pavblog',
				'pavblogcategory',
				'pavblogcomment',
				'pavbloglatest',
				'pavcustom',
				'pavproductcarousel',
				'pavsliderlayer',
				'pavmegamenu',
				'pavproducts',
				'featured',
				'bestseller',
				'pavgallery',
				'pavfacebook'
			);
			
			return $modules;
		}
		
		public static function getModulesQuery(){
			$query = array();
			require( dirname(__FILE__).'/pav_decor_query.php' );
			return $query;
		}
		
		public static function getStoreConfigs(){
			return array(
					'config_image_category_width' => 900,
					'config_image_category_height' => 350,
					
					'config_image_thumb_width' => 500,
					'config_image_thumb_height' => 550,
					
					'config_image_popup_width' => 500,
					'config_image_popup_height' => 550,
					
					'config_image_product_width' => 300,
					'config_image_product_height' => 330,
					
					'config_image_additional_width' =>91,
					'config_image_additional_height' => 101,
					
					'config_image_related_width' => 300,
					'config_image_related_height' => 330,
					
					'config_image_compare_width' => 200,
					'config_image_compare_height' => 220,
					
					'config_image_wishlist_width' => 70,
					'config_image_wishlist_height' => 77,
					
					'config_image_cart_width' => 70,
					'config_image_cart_height' => 77,
			);
		}
	
	}
}
?>