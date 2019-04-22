<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 *
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
    'page' => [
        'childService' => [
            
            'menu' => [
                'displayHome' => [
                    'enable' => true,        // 是否在菜单中显示home
                    'display'=> 'Home',        // 显示对应的字符。
                ],
                
            ],
            
            'currency' => [
                'baseCurrecy' => 'CNY',  	# 基础货币，后台产品的价格都使用基础货币填写价格值。
                'defaultCurrency' => 'CNY', # 默认货币，如果store不设置货币，就使用这个store默认货币
                
            ],
        ],
    ],
];
