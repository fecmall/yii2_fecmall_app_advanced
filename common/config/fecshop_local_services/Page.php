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
            'currency' => [
                'baseCurrecy'     => 'CNY',    // 基础货币，后台产品的价格都使用基础货币填写价格值。
                'defaultCurrency' => 'CNY', // 默认货币，如果store不设置货币，就使用这个store默认货币
                'currencys'       => [
                    /*
                    'EUR' => [            // 欧元
                        'rate'        => 0.93, // 汇率
                        'symbol'      => '€',
                    ],
                    
                    //'AUD' => [
                    //	'rate' 		=> 1.33,
                    //	'symbol' 	=> 'AU$',
                    //],
                    'GBP' => [            // 英镑
                        'rate'        => 0.8,
                        'symbol'      => '£',
                    ],
                    */
                    'USD' => [            // 货币简码，USD代表美元，这个是国际标准
                        'rate'        => 0.14,    // 汇率  当前货币/基础货币的比值，譬如，人民币/美元 = 7
                        'symbol'      => '$', //货币符号
                    ],
                    'CNY' => [            // 人民币
                        'rate'        =>  1, //6.87,
                        'symbol'      => '￥',
                    ],
                ],
            ],
            'trace' => [
                'class' => 'fecshop\services\page\Trace',
                // 关闭和打开Trace功能，默认关闭，打开前，请先联系申请下面的信息，QQ：2358269014
                'traceJsEnable' => false,
                // trace系统的 站点唯一标示  website id
                'website_id'    => '9b17f5b4-b96f-46fd-abe6-a579837ccdd9',
                // trace系统的Token，当fecshop给trace通过curl发送数据的时候，需要使用该token进行安全认证。
                'access_token'  => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ3ZWJzaXRlX3VpZCI6IjliMTdmNWI0LWI5NmYtNDZmZC1hYmU2LWE1Nzk4MzdjY2RkOSJ9.-HsUq-qKcn2dhvGoxSYHVqMxNTH0cBcLsUl-R_utaCo',
                // 当fecshop给trace通过curl发送数据，最大的超时时间，该时间是为了防止
                'api_time_out' => 1.5, // 秒
                // 追踪js url，这个是在统计系统，由管理员提供
                'trace_url'     => 'trace.fecshop.com/fec_trace.js',
                // 管理员提供，用于发送登录注册邮件，下单信息等。
                'trace_api_url' => 'http://tracejs.fecshop.com/fec/trace/api',
            ],
            
            /** 这个是提交的内容
            'trace' => [
                // 关闭和打开Trace功能，默认关闭，打开前，请先联系申请下面的信息，QQ：2358269014
                'traceJsEnable' => false,
                // trace系统的 站点唯一标示  website id
                'website_id'    => '',
                // trace系统的Token，当fecshop给trace通过curl发送数据的时候，需要使用该token进行安全认证。
                'access_token'  => '',
                // 当fecshop给trace通过curl发送数据，最大的超时时间，该时间是为了防止
                'api_time_out' => 1, // 秒
                // 追踪js url，这个是在统计系统，由管理员提供
                'trace_url'     => '',
                // 管理员提供，用于发送登录注册邮件，下单信息等。
                'trace_api_url' => '',
            ],
            */
        ],
    ],
];

