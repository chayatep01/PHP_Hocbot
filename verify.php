<?php
$access_token = 'D/StaYzsRD1GXNZ7pNmGyxSycGt0byaX6DmPP3efqppuCBRmpsXZqaCe+SeEVKjGK3oSCnf1RPAEkR3Kkc+4/fnjg+jxbTtlgMydIOMRL1vx2DO/MmIZfRSQ0D2FeSYJVvJCJ6mmQ9J7eKmT8bRHQwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
