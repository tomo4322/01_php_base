<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 表示するタイミングによって自動で算出すること


// ・現在日時（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)

// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。

// date_default_timezone_set('Asia/Tokyo');

// 現在日時

echo date('Y年m月d日 H時i分s秒')."<br/>\n";


// 現在日時から3日後

$startDate = strtotime('+3 day');

echo date('Y年m月d日 H時i分s秒', $startDate)."<br/>\n";


// 現在日時から12時間前

$startDate = strtotime('-12 hour');

echo date('Y年m月d日 H時i分s秒', $startDate)."<br/>\n";


// 2020年元旦から現在までの経過日数

$today = date('Y-m-d');
$today = strtotime($today);
$pastDay = strtotime('2020-01-01');
echo '('.($today-$pastDay) / (60 * 60 * 24).'日'.')'."<br/>\n";

// DateTImeクラスを用いたやり方

$today = new DateTime('now');
$Past = new DateTime('2020-01-01');
$diff = $today->diff($Past);
echo '('.$diff->days.'日'.')';
