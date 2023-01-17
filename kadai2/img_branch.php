<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
</head>

<body>
    <?php

    if (isset($_POST['disp']) == true) {
        if (isset($_POST['imgcode']) == false) {
            header('Location:img_ng.php');
            exit();
        }
        $img_code = $_POST['imgcode'];
        header('Location:img_disp.php?imgcode=' . $img_code);
        exit();
    }
    if (isset($_POST['add']) == true) {
        header('Location:img_add.php');
        exit();
    }
    if (isset($_POST['delete']) == true) {
        if (isset($_POST['imgcode']) == false) {
            header('Location:img_ng.php');
            exit();
        }
        $img_code = $_POST['imgcode'];
        header('Location:img_delete.php?imgcode=' . $img_code);
        exit();
    }
    ?>
</body>

</html>