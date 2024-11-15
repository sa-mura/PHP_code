<?php

require 'db_connection.php';

//SQL文でデータ取得
//ユーザー入力なし query
// $sql = 'select * from contacts where id =2'; //sqlを変数に入れる
// $stmt = $pdo->query($sql); //　sql実行　ステートメント

// $result =$stmt->fetchall(); //sqlの結果を表示させるfetchall

// echo '<pre>';
// var_dump($result);
// echo '</pre>';
//ユーザー入力あり prepare, bind execute
//悪意のあるユーザがいるとすると、 delte *　を防ぐ。
//→SQLインジェクション対策

//「:id」のことを名前付きプレースホルダ
$sql = 'select * from contacts where id =:id'; 
$stmt = $pdo->prepare($sql);//プリペアードステートメント

//紐づけをbind idを紐づけ
$stmt->bindValue('id', 3, PDO::PARAM_INT);//紐付け
$stmt->execute(); //実行

$result =$stmt->fetchall(); //sqlの結果を表示させるfetchall

echo '<pre>';
var_dump($result);
echo '</pre>';