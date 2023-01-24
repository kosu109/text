<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
</head>

<body>
    <?php

    $img_title = $_POST['title'];
    $img_description = $_POST['description'];
    $img_file= $_FILES['file'];

    $img_title = htmlspecialchars($img_title, ENT_QUOTES, 'UTF-8');
    $img_description = htmlspecialchars($img_description, ENT_QUOTES, 'UTF-8');

    print '画像の登録確認<br />';
    if ($img_title == '') {
        print 'タイトルが未入力です。<br />';
        
    } else {
        print 'タイトル:';
        print $img_title;
        print '<br />';
    }
    if ($img_description == '') {
        print '説明が未入力です。<br />';
        
    } else {
        print '説明:';
        print $img_description;
        print '<br />';
    }
    if ($img_file['size']<0) {
       print '画像が未入力です。<br />';
    } 
    if($img_file['size']>1000000){
        print '画像が大きすぎます';
    }
    else {
        move_uploaded_file($img_file['tmp_name'],'./image/'.$img_file['name']);
        print '<img src="./image/'.$img_file['name'].'">';
        print'<br />';
    }if($img_title==''||$img_description==''|| $img_file==''){
        print'<form>';
        print'<input type="button" onclick="history.back()"value="戻る">';
        print'<form>';
    }else{
        print'この画像を登録しますか。<br />';
        print '<form method="post"action="img_add_done.php">';
        print '<input type="hidden"name="title"value="' . $img_title . '">';
        print '<input type="hidden"name="description"value="' . $img_description . '">';
        print '<input type="hidden"name="file_name"value="' . $img_file['name'] . '">';
        print '<br />';
        print '<input type="button"onclick="history.back()"value="戻る">';
        print '<input type="submit"value="OK">';
        print '</form>';
    }
    ?>
</body>

</html>