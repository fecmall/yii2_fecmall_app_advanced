
FecMall
========


安装composer

```
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
composer self-update
```


composer 安装fecshop app advanced


```
composer global require "fxp/composer-asset-plugin:^1.4.4"
composer create-project fecmall/fbbcbase-app-advanced  fecmall_fbbcbase 1.0.0.0
cd fecshop
composer update    
./init
```







