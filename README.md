Laravel Taiwan Street Data
===============

# 安裝需求

1. 有使用APC Cache請確認有安裝APC

# 安裝方式

1. 在 composer.json中加入 "laravel-taiwan/laravel-tw-streetname":"dev-master"
2. composer update
3. 在 app.php 中加入 'Seta0909\LaravelTwStreetname\LaravelTwStreetnameServiceProvider'

# 使用方式

##取得縣市資料
TwStreet::getCity();
##取得鄉鎮市區資料
TwStreet::getCountry("台北市");//完整縣市名稱
TwStreet::getCountry(1);//uid
##取得街道資料
TwStreet::getStreet("中山區");//完整鄉鎮市區名稱
TwStreet::getCountry(2);//uid
##取得郵遞區號
TwStreet::getCode("五股區");

# 資料來源

街道資料：https://github.com/Blue-Lan/AddressData-Taiwan<br/>
郵遞區號：https://gist.github.com/davidou123/5143798
