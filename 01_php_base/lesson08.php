﻿<?php
// 連想配列に国と都市を格納し
// ○○の首都は○○です。
// という形でループ構文を使用してすべて出力してください。

// 日本、アメリカ、イギリス、フランス
// 東京、ワシントン、ロンドン、パリ
$arr = array("日本" => "東京", "アメリカ" => "ワシントン", "イギリス" => "ロンドン", "フランス"=> "パリ");
foreach ($arr as $key => $city) {
    echo $key."の首都は".$city."です。"."\n";
}