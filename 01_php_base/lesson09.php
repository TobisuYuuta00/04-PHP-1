<?php
// 引数として数値を渡すと+1して返す関数を作り、
// 返り値を出力してください。
function plus($num1){
    $sum = $num1 + 1;
    return $sum;
}

$sum = plus(8);
echo $sum."\n";
