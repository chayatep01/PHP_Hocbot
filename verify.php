<?php
$access_token = 'XCvAjF6B+PPiyNhB+KAFWbR86IYK/O0ZNkNz/R69wS5/p8VGAqr0SXB5hDsbLfVtK3oSCnf1RPAEkR3Kkc+4/fnjg+jxbTtlgMydIOMRL1saGoHPIojXMYXpaoM4w97Vv4T4BbM/ESnnof7mnkmcPgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
