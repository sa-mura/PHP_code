<?php

//for　繰り返す数が決まっていたら
//while　繰り返す数が決まっていなかったら

//繰り返し 2024.11.11.murakami
//continue, break
for($i = 0; $i < 10; $i++){

    if( $i === 5){
    //break;
    continue;
    }
    echo $i;
}

    echo '</br>';

$j = 0;
while($j < 5){
    echo $j;
    $j++;
}

//あまり見ない構文
do {echo $j;}
while($j < 5);
?>