<?php

include_once "wxBizDataCrypt.php";

//修复bug
$appid = 'wx1e4785fa849e936c';
$sessionKey = 'OaGZH0YKQlLI5bxs5H64tw==';

$encryptedData="eW0IE28B+aI+e2ScchCKUVS3mCBzNtnUKgFfgH/sGvzIVXCWEWW//TAlND/bPG4hgtY+d0wButHz6QqgN0aM6o0srJVFQkS5FNKDy/Pby+rDx0457V0ESDtykuzHWVQVoj7TrfyXmZibl289f3cVlzGaBM9dwQeRwYbyolo4nQS/9luzogOsGnMSQDQHoJSS01z24qfTXIiHQIrSs3s8dw==";

$iv = 'NsocrwB5E2ng5jCKBPHOZg==';

$pc = new WXBizDataCrypt($appid, $sessionKey);
$errCode = $pc->decryptData($encryptedData, $iv, $data );

if ($errCode == 0) {
    print($data . "\n");
} else {
    print($errCode . "\n");
}
