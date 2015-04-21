<?php
/*
Plugin Name: WooCommerce Taiwan States Dropdown
Plugin URI: https://github.com/neltseng/WooCommerce-Taiwan-States-Select
Description: WooCommerce 台灣結帳表單城市下拉
Version: 1.0
Author: Nel Tseng
Author URI: https://cloudwp.pro
 */

add_filter('woocommerce_states', 'custom_woocommerce_states');
function custom_woocommerce_states($states) {

	$states['TW'] = array(
		'TW1' => '基隆市',
		'TW2' => '台北市',
		'TW3' => '新北市',
		'TW4' => '宜蘭縣',
		'TW5' => '桃園市',
		'TW6' => '新竹市',
		'TW7' => '新竹縣',
		'TW8' => '苗栗縣',
		'TW9' => '台中市',
		'TW10' => '彰化縣',
		'TW11' => '南投縣',
		'TW12' => '雲林縣',
		'TW13' => '嘉義市',
		'TW14' => '嘉義縣',
		'TW15' => '台南市',
		'TW16' => '高雄市',
		'TW17' => '屏東縣',
		'TW18' => '花蓮縣',
		'TW19' => '台東縣',
		'TW20' => '澎湖',
		'TW21' => '金門',
		'TW22' => '馬祖',
		'TW23' => '離島地區',
	);

	return $states;
}

// 自訂結帳欄位排序

add_filter('woocommerce_default_address_fields', 'my_default_address_fields');
function my_default_address_fields($fields) {
    
    //調動整行調整順序
    
    $fields2['country'] = $fields['country'];
    $fields2['first_name'] = $fields['first_name'];
    $fields2['last_name'] = $fields['last_name'];
    $fields2['company'] = $fields['company'];
    $fields2['address_1'] = $fields['address_1'];
    $fields2['address_2'] = $fields['address_2'];
    $fields2['city'] = $fields['city'];
    $fields2['state'] = $fields['state'];
    $fields2['postcode'] = $fields['postcode'];
    $fields2['email'] = $fields['email'];
    $fields2['phone'] = $fields['phone'];
    
    return $fields2;
}
