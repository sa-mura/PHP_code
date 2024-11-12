<?php

function test(){
    //処理
    echo 'テスト';

}

test();


// インプット引数あり
// アウトプット戻り値 なし

$comment = 'コメント2';
$comment3 = 'コメント3';
function getComment($string){
    echo $string;
}

getComment($comment3);

// インプット引数なし
// アウトプット戻り値 あり
function getNumberOfComment(){
   return 5;
}
$commentNumber = getNumberOfComment();
echo $commentNumber;

//引数2つ
//戻り値あり

function sumPrice($int1 , $int2){
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPrice(3,5);
echo $total;
?>