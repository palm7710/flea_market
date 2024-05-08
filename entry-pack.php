<?php
$e_entry = $pdo->query('SELECT * FROM shohins'); //shohins
$p_entry = $pdo->query('SELECT * FROM images'); //images
$s_entry = $pdo->query('SELECT * FROM sell'); //sell

$b_entry = $pdo->query('SELECT * FROM bunruis'); //分類
$c_entry = $pdo->query('SELECT * FROM conditions') //状態
?>