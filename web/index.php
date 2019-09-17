<?php
$pdo = new PDO('mysql:host=0.0.0.0;dbname=test;port=3306;charset=utf8', 'root', '1');

print_r($pdo->query('show tables')->fetchAll());

