<?php
/*
Plugin Name: WooCommerce Taiwan States Dropdown
Plugin URI: https://github.com/neltseng/WooCommerce-Taiwan-States-Dropdown/
Description: WooCommerce 台灣 結帳表單城市下拉選項.
Version: 1.0
Author: Nel Tseng
Author URI: https://cloudwp.pro/
 */

add_filter('woocommerce_states', 'custom_woocommerce_states');

function custom_woocommerce_states($states) {
    
    $states['TW'] = array('TW01' => '基隆市', 'TW02' => '台北市', 'TW03' => '新北市', 'TW04' => '宜蘭縣', 'TW05' => '桃園市', 'TW06' => '新竹市', 'TW07' => '新竹縣', 'TW08' => '苗栗縣', 'TW09' => '台中市', 'TW10' => '彰化縣', 'TW11' => '南投縣', 'TW12' => '雲林縣', 'TW13' => '嘉義市', 'TW14' => '嘉義縣', 'TW15' => '台南市', 'TW16' => '高雄市', 'TW17' => '屏東縣', 'TW18' => '花蓮縣', 'TW19' => '台東縣', 'TW20' => '澎湖', 'TW21' => '金門', 'TW22' => '馬祖', 'TW23' => '離島地區',);
    
    return $states;
}


// 自訂結帳欄位排序

add_filter('woocommerce_default_address_fields', 'cwp_custom_address_fields');
function cwp_custom_address_fields($fields) {
    
    // 調整整行順序,若需隱藏可加註排除
    
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
