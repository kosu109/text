<?php
session_start();
$data =$_SESSION["data"];
session_regenerate_id();
?>
<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>セッション2</title>
    </head>
    <body>
        <p>s2です。データは<?=$data ?></p>
        <p><?=session_id()?></p>
        <a href="s1.php">s1へ</a>
    </body>
</html>