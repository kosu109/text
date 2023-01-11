<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
</head>

<body>
    <?php

    $img_id = $_POST['id'];
    $img_title = $_POST['title'];
    $img_file= $_FILES['file'];

    $img_title = htmlspecialchars($img_title, ENT_QUOTES, 'UTF-8');
    $img_file = htmlspecialchars($img_file, ENT_QUOTES, 'UTF-8');

    if ($img_title == '') {
        print 'タイトルが入力されていません。<br />';
        
    } else {
        print 'タイトル:';
        print $img_title;
        print '<br />';
    }

    if (preg_match('/\A[0-9]+\z/',$pro_price)==0) {
        print 'サムネイルをきちんと入力してください。<br />';
    } else {
        print'サムネイル:';
        print $img_file;
        print'<br />';
    }if($img_file['size']>0){
        if($img_file['size']>1000000){
            print'画像が大きすぎます';
        }else{
            move_uploaded_file($img_file['tmp_name'],'./file/'.$img_file['name']);
            print'<img src="./file/'.$img_fifle['name'].'">';
            print'<br />';
        }
    }if($img_title==''||preg_match('/\A[0-9]+\z/',$img_title)==0 || $img_tilte['size']>1000000){
        print'<form>';
        print'<input type="button" onclick="history.back()"value="戻る">';
        print'<form>';
    }else{
        print'上記の商品を追加します。<br />';
        print '<form method="post"action="img_add_done.php">';
        print '<input type="hidden"name="id"value="' . $img_id . '">';
        print '<input type="hidden"name="price"value="' . $img_title . '">';
        print '<input type="hidden"name="gazou_name"value="' . $img_file['name'] . '">';
        print '<br />';
        print '<input type="button"onclick="history.back()"value="戻る">';
        print '<input type="submit"value="OK">';
        print '</form>';
    }
    ?>
</body>

</html>