﻿<?php
// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。
$arr = [10,60,90,70,50];
for ($i = 0; $i <= 4; $i++){
    if ($arr[$i] >= 80){
        echo $arr[$i],"点は優です。","\n";
    }else if ($arr[$i] >= 60 && $arr[$i] < 80){
            echo $arr[$i],"点は良です。","\n";
    }else if ($arr[$i] >= 40 && $arr[$i] < 60){
            echo $arr[$i],"点は可です。","\n";
    }else {
        echo $arr[$i],"点は不可です。","\n";
    }
}
