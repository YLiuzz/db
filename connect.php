<?php


$pdo = new PDO(
    'mysql:host=localhost;dbname=db;',
    'root',
    ''

);
$pdo->exec('set names utf8');
date_default_timezone_set('Asia/Taipei');




?>