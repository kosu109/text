<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>個人情報</title>
</head>

<body>
    <?php

    if (isset($_POST['disp']) == true) {
        if (isset($_POST['ID']) == false) {
            header('Location:kojin_disp.php');
            exit();
        }
        $kojin_ID = $_POST['ID'];
        header('Location:kojin_disp.php?ID=' . $kojin_ID);
        exit();
    }
    if (isset($_POST['add']) == true) {
        header('Location:kojin_add.php');
        exit();
    }
    if (isset($_POST['edit']) == true) {
        if (isset($_POST['ID']) == false) {
            header('Location:kojin_edit.php');
            exit();
        }
        $kojin_ID = $_POST['ID'];
        header('Location:kojin_edit.php?ID=' . $kojin_ID);
        exit();
    }
    if (isset($_POST['delete']) == true) {
        if (isset($_POST['ID']) == false) {
            header('Location:kojin_delete.php');
            exit();
        }
        $kojin_ID = $_POST['ID'];
        header('Location:kojin_delete.php?ID=' . $kojin_ID);
        exit();
    }
    ?>
</body>

</html>