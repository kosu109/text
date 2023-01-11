<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
</head>

<body>
    <?php

    if (isset($_POST['disp']) == true) {
        if (isset($_POST['id']) == false) {
            header('Location:img_disp.php');
            exit();
        }
        $img_id = $_POST['id'];
        header('Location:img_disp.php?id=' . $img_id);
        exit();
    }
    if (isset($_POST['add']) == true) {
        header('Location:img_add.php');
        exit();
    }
    if (isset($_POST['delete']) == true) {
        if (isset($_POST['id']) == false) {
            header('Location:img_delete.php');
            exit();
        }
        $img_id = $_POST['id'];
        header('Location:img_delete.php?id=' . $img_id);
        exit();
    }
    ?>
</body>

</html>