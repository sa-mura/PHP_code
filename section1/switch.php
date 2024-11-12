<?php
$data = '1';

// ==等しい
// ===型も等しい

switch($data){
    case $data === 1:
        echo '1です';
        break;
    case $data === 2:
        echo '2です';
        break;
    case $data === 3:
        echo '3です';
        break;
    default:
        echo '1-3ではありません';
    }

if ($data === '1'){
    echo '1です';
}
if ($data === '2'){
    echo '2です';
}
if ($data === '3'){
    echo '3です';
}
?>