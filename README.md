Laravel Taiwan Street Data
===============

# 安裝需求及注意事項

1. 有使用APC Cache請確認有安裝APC
2. 免安裝資料庫完全使用陣列
3. 沒寫phpunit autotest
4. 第一次載入會較慢，資料進cache後就會快很多

# 安裝方式

1. 在 composer.json中加入 "seta0909/laravel-tw-streetname": "*"
2. composer update
3. 在 config/app.php 中加入 'Seta0909\LaravelTwStreetname\LaravelTwStreetnameServiceProvider'

# 使用方式

###取得縣市資料
TwStreet::getCity();
###取得鄉鎮市區資料
TwStreet::getCountry("台北市");//完整縣市名稱<br/>
TwStreet::getCountry(1);//uid
###取得街道資料
TwStreet::getStreet("中山區");//完整鄉鎮市區名稱<br/>
TwStreet::getCountry(2);//uid
###取得郵遞區號
TwStreet::getCode("五股區");<br/>

# 資料來源

街道資料：https://github.com/Blue-Lan/AddressData-Taiwan<br/>
郵遞區號：https://gist.github.com/davidou123/5143798
