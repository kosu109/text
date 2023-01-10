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
        print '価格をきちんと入力してください。<br />';
    } else {
        print'価格:';
        print $pro_price;
        print'円<br />';
    }if($pro_gazou['size']>0){
        if($pro_gazou['size']>1000000){
            print'画像が大きすぎます';
        }else{
            move_uploaded_file($pro_gazou['tmp_name'],'./gazou/'.$pro_gazou['name']);
            print'<img src="./gazou/'.$pro_gazou['name'].'">';
            print'<br />';
        }
    }if($pro_name==''||preg_match('/\A[0-9]+\z/',$pro_price)==0 || $pro_gazou['size']>1000000){
        print'<form>';
        print'<input type="button" onclick="history.back()"value="戻る">';
        print'<form>';
    }else{
        print'上記の商品を追加します。<br />';
        print '<form method="post"action="pro_add_done.php">';
        print '<input type="hidden"name="name"value="' . $pro_name . '">';
        print '<input type="hidden"name="price"value="' . $pro_price . '">';
        print '<input type="hidden"name="gazou_name"value="' . $pro_gazou['name'] . '">';
        print '<br />';
        print '<input type="button"onclick="history.back()"value="戻る">';
        print '<input type="submit"value="OK">';
        print '</form>';
    }
    ?>
</body>

</html>