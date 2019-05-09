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
    'image' => [
        'appbase'    => [
            'appserver' => [
                'basedir'    => '@appimage/appserver',
                'basedomain' => '//bbc.img1.fecmall.com',
            ],
            'appadmin' => [
                'basedir'    => '@appimage/appadmin',
                'basedomain' => '//bbc.img2.fecmall.com',
            ],
            'appbdmin' => [
                'basedir'    => '@appimage/appbdmin',
                'basedomain' => '//bbc.img3.fecmall.com',
            ],
            //'appadmin' => [
            //	'basedir' => '@appimage/appadmin',
            //	'basedomain' => '//img.appadmin.fancyecommerce.com',
            //],
            'common' => [
                'basedir'    => '@appimage/common',
                'basedomain' => '//bbc.img.fecmall.com',
            ],
        ],
    ],
];
