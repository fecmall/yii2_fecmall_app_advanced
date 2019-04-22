<?php
return [
    'components' => [
        // Mysql部分的配置
        'db' => [ 
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=fecshop',
            'username' => 'root',
            'password' => 'xxxxxx',
            'charset' => 'utf8',
        ],
        // Mongodb部分的配置
		'mongodb' => [
            'class' => 'yii\mongodb\Connection',
			# 有账户的配置
            //'dsn' => 'mongodb://username:password@localhost:27017/datebase',
			# 无账户的配置
			'dsn' => 'mongodb://127.0.0.1:27017/fecshop',
			# 复制集
			//'dsn' => 'mongodb://10.10.10.252:10001/erp,mongodb://10.10.10.252:10002/erp,mongodb://10.10.10.252:10004/erp?replicaSet=terry&readPreference=primaryPreferred',
        ],
		// Redis的配置
		'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '127.0.0.1',    // redis的host
            'port' => 6379,               // redis的端口     
			//'password'  => 'xxxxx', // redis的密码
            'database' => 0,    // redis的库，此处不要改动
        ],
        // Cache 组件的配置，您需要配置下面的redis
        'cache' => [
            'class'     => 'yii\redis\Cache',
            // 缓存配置独立的redis，您可以和上面的redis配置一致
            'redis' => [
                'hostname' => '127.0.0.1',   // redis的host
                'port' => 6379,              // redis的端口   
                //'password'  => 'xxxxx', // redis的密码
            ],
        ],
        // Session 组件的配置，您需要配置下面的redis
        'session' => [
            'class'   => 'yii\redis\Session',
            // session过期时间，1天过期
            'timeout' => 86400 * 1, 
            // 缓存配置独立的redis，您可以和上面的redis配置一致
            'redis' => [
                'hostname' => '127.0.0.1', // redis的host
                'port' => 6379,            // redis的端口   
                //'password'  => 'xxxxx', // redis的密码
            ],
        ],

    ],
];
