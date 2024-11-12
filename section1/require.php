<?php

//ファイルを読み込む
require __DIR__. '/common/common.php';

echo $commonVariable;

//絶対パスが表示される
//echo __DIR__;

//現在のファイルのありかがが表示される
echo __FILE__;

///common/common.phpの関数
commonTest();

?>