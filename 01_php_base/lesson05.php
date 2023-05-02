<?php
// 連想配列の要素name, age, genderに
// 田中,25,男
// という値を格納し、

// 田中
// 25歳・男性

// という形で出力してください。
$human = array("name" => "田中", "age" => "25", "gender" => "男");

echo $human["name"],"\n";
echo $human["age"],"歳・",$human["gender"],"性";
echo "\n";