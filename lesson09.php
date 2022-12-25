<?php
// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。
$arrayPoints = [10,60,90,70,50];

if ($arrayPoints[0] >= 80) {
    $eva = '「優」';
} elseif ($arrayPoints[0] >= 60) {
    $eva = '「良」';
} elseif ($arrayPoints[0] >= 40) {
    $eva = '「可」';
} else {
    $eva ='「不可」';
}

echo $arrayPoints[0].'点は'.$eva.'です。'."<br/>\n";


if ($arrayPoints[1] >= 80) {
    $eva = '「優」';
} elseif ($arrayPoints[1] >= 60) {
    $eva = '「良」';
} elseif ($arrayPoints[1] >= 40) {
    $eva = '「可」';
} else {
    $eva ='「不可」';
}

echo $arrayPoints[1].'点は'.$eva.'です。'."<br/>\n";

if ($arrayPoints[2] >= 80) {
    $eva = '「優」';
} elseif ($arrayPoints[2] >= 60) {
    $eva = '「良」';
} elseif ($arrayPoints[2] >= 40) {
    $eva = '「可」';
} else {
    $eva ='「不可」';
}

echo $arrayPoints[2].'点は'.$eva.'です。'."<br/>\n";

if ($arrayPoints[3] >= 80) {
    $eva = '「優」';
} elseif ($arrayPoints[3] >= 60) {
    $eva = '「良」';
} elseif ($arrayPoints[3] >= 40) {
    $eva = '「可」';
} else {
    $eva ='「不可」';
}

echo $arrayPoints[3].'点は'.$eva.'です。'."<br/>\n";
