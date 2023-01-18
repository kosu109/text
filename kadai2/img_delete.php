<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像ライブラリ</title>
    </head>
    <body>
        <?php
        try{
            $img_code=$_GET['imgcode'];
            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $password='';
            $dbh=new PDO($dsn,$user,"");
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='SELECT id,title,file FROM image WHERE id=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$img_code;
            $stmt->execute($data);

            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            $img_title=$rec['title'];
            $img_file_name=$rec['file'];

            $dbh=null;
            
            if($img_file_name==''){
                $disp_file='';
            }else{
                $disp_file='<img src="./image/'.$img_file_name.'">';
            }
        }
        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            print $e->getMessage();
            exit();
        }
        ?>

        画像の削除確認<br/>
        <br/>
        [ID]<br/>
        <?php print $img_code;?>
        <br/>
        [タイトル]<br/>
        <?php print $img_title;?>
        <br/>
        <?php print $disp_file;?>
        <br/>
        このファイルを削除しますか？<br/>
        <br/>
        <form method="post"action="img_delete_done.php">
            <input type="hidden"name="imgcode"value="<?php print $img_code;?>">
            <input type="hidden"name="tilte"value="<?php print $img_title;?>">
            <input type="hidden"name="file_name"value="<?php print $img_file_name;?>">
            <input type="button"onclick="history.back()"value="戻る">
            <input type="submit"value="OK">
        </form>
    </body>
</html>