<?php

//文字列の長さ

//マルチバイトが関係するため、日本語の場合15文字になる
//日本語 SJIS, UTF-8で日本語の場合→3バイト～6バイトになる
$text = 'あいうえお';

//echo strlen($text);

//マルチバイトを5文字にするためには、mb_strlenを使う
echo mb_strlen($text);

//文字列の置換

$str = '文字列を置換します';

echo str_replace('置換','ちかん',$str);

//指定文字列で分割

//配列で返す
$str_2 = '指定文字列で、分割します';

echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';

//implode

//正規表現
// 文字かどうか
// 数字かどうか
$str_3 = '特定の文字列が含まれるか確認する';
echo preg_match('/文字列/',$str_3);

// 指定文字列から文字列を取得する 0から始まる
//「substr」にし、「あいう」にすると文字化けになる
//「PHP　文字列　削除」など検索する、新しいものなどを使い方を覚えること
echo substr('aiu', 2);
?>