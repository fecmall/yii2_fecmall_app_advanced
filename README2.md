系统说明
========

1.创建供应商后台 ./appbdmin

将nginx域名解析到这个路径，然后可以进行登陆。




###文件


文件1：`./appbdmin/*`

这个是入口

文件2：`./common/config/bootstrap.php` 加入配置

```
Yii::setAlias('@appbdmin', dirname(dirname(__DIR__)).'/appbdmin');
Yii::setAlias('@fbbcbase', dirname(dirname(__DIR__)).'/feepackage/fecshop/fec_bbc_base');
```
文件3：`./feepackage/fecshop/fec_bbc_base`

文件4：`appadmin/web/index.php` 添加了配置





































