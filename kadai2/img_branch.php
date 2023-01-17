<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
</head>

<body>
    <?php

    if (isset($_POST['disp']) == true) {
        if (isset($_POST['cord']) == false) {
            header('Location:img_disp.php');
            exit();
        }
        $img_id = $_POST['cord'];
        header('Location:img_disp.php?id=' . $img_cord);
        exit();
    }
    if (isset($_POST['add']) == true) {
        header('Location:img_add.php');
        exit();
    }
    if (isset($_POST['delete']) == true) {
        if (isset($_POST['cord']) == false) {
            header('Location:img_delete.php');
            exit();
        }
        $img_cord = $_POST['cord'];
        header('Location:img_delete.php?id=' . $img_cord);
        exit();
    }
    ?>
</body>

</html>