<?php
$access_token = 'nGESwNQuDJhp9oO5PDYZrMefs6Na2syuV59azEFlYM5rfziLNGhAPems915DQOa3wi2mUg1xCZ6M1Ly+HXa+8gdlIZVl+i5bq/s+V7qETdfZg7HniKShZjhbd51UICEZsW+GUS0DhJB/bSiK1LUEcQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
