<?php
// 変数に値を代入し、
// その値が50より大きければ
// 「50より大きい」
// 50より小さければ
// 「50より小さい」
// 50と同値であれば
// 「50です」
// という文字列を出力してください。

// また最低限どういう値でテストすればいいか
// 確認したテスト値をコメントアウトですべて示してください。

$testNumber = 51;

if ($testNumber > 50) {
    echo '50より大きい'."<br/>\n";
} elseif ($testNumber < 50) {
    echo '50より小さい'."<br/>\n";
} else {
    echo '50です'."<br/>\n";
}

$testNumber = 49;

if ($testNumber > 50) {
    echo '50より大きい'."<br/>\n";
} elseif ($testNumber < 50) {
    echo '50より小さい'."<br/>\n";
} else {
    echo '50です'."<br/>\n";
}


$testNumber = 50;

if ($testNumber > 50) {
    echo '50より大きい'."<br/>\n";
} elseif ($testNumber < 50) {
    echo '50より小さい'."<br/>\n";
} else {
    echo '50です'."<br/>\n";
}



// 確認したテスト値はそれぞれ51,49,50です