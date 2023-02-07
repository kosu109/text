<?php

try{
    $staff_code=$_POST['code'];
    $staff_pass=$_POST['pass'];

    $staff_code=htmlspecialchars($staff_code,ENT_QUOTES,'UTF-8');
    $staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

    $staff_pass=md5($staff_pass);

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,)
}
?>