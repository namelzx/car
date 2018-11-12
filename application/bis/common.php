<?php
//  百度地图api方法
// $url
// int $type - get 1 post
// array $data
function doCurl($url, $type = 0, $data = [])
{
    $ch = curl_init();//初始化
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    if ($type = 1) {
        // post
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    }
    // 执行并获取内容
    $output = curl_exec($ch);
    // 释放curl
    curl_close($ch);
    return $output;
}
