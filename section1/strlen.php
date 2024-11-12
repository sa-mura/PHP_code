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

?>