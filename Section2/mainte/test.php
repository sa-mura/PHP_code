<?php
//パスワードを記録したファイルの場所
echo __FILE__;
//C:\xampp\htdocs\php_test\Section2\mainte\test.php

echo '<br>';
//パスワード（暗号化）
echo(password_hash('password123', PASSWORD_BCRYPT));
// $2y$10$lhELRtB1RbqNJZdfK0d58uL/.rwbqX0uRrAB72FEQgRh13UKD82bi
?>