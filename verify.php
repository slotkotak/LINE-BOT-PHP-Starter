<?php
$access_token = 'g3vcpG2D34EUbk80CC2DW5XwWjhn3KNEAeWCDEyfuG4f1AZceazZgE0CUY/29EM+wFfRNRSiXYH7wn4HAm47EgP8l+SlNqaGM7ucP06jBdVica3ckXD6gtM+AfzssbPmvGKVDoCQ/hB57Qpks11DVgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
