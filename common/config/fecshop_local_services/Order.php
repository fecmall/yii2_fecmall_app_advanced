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
    'order' => [
        'increment_id'        => '1100000000', // 订单的格式。
        'requiredAddressAttr' => [ // 必填的订单字段。
            'first_name',
            'last_name',
            'email',
            'telephone',
            'street1',
            'country',
            'city',
            'state',
            'zip',
        ],
        /**
         * 计算销量的订单时间范围（将最近几个月内的订单中的产品销售个数累加，作为产品的销量值,譬如3代表计算最近3个月的订单产品）
         * 0：代表计算订单表中所有的订单。
         * 这个值用于console入口（脚本端），通过shell脚本执行，计算产品的销量，将订单中产品个数累加作为产品的销量，然后将这个值更新到产品表字段中，用于产品按照销量排序或者过滤
         */
        'orderProductSaleInMonths' => 3,
        //处理多少分钟后，支付状态为pending的订单，归还库存。
        'minuteBeforeThatReturnPendingStock'    => 600,
        // 脚本一次性处理多少个pending订单。
        'orderCountThatReturnPendingStock'        => 30,
        // 订单状态配置
        
        // 下面是订单支付状态
        // 等待付款状态
        'payment_status_pending'            => 'payment_pending',
        // 付款处理中，(支付处理中，因为信用卡有预售，因此需要等IPN消息来确认是否支付成功)
        'payment_status_processing'         => 'payment_processing',
        // 收款成功（支付状态已确认，代表已经收到钱了）
        'payment_status_confirmed'          => 'payment_confirmed',
        // 欺诈【当paypal的返回金额和网站金额不一致【以及货币类型】的情况，就会判定该状态】
        'payment_status_suspected_fraud'    => 'payment_suspected_fraud',
        // 订单支付已取消【用户进入paypal点击取消订单返回网站，或者payment_pending订单超过xx时间未支付被脚本取消，或者客服后台取消】
       'payment_status_canceled'            => 'payment_canceled',
        
    ],    
];
