<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像ライブラリ</title>
    </head>
    <body>
        <?php
        try{
            $img_id=$_GET['imgid'];
            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $password='';
            $dbh=new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='SELECT title,file FROM image WHERE ID=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$img_id;
            $stmt->execute($data);

            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            $img_title=$rec['title'];
            $pro_gazou_name=$rec['gazou'];

            $dbh=null;
            
            if($pro_gazou_name==''){
                $disp_file='';
            }else{
                $disp_file='<img src="./file/'.$pro_gazou_name.'">';
            }
        }
        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
        ?>

        画像の削除確認<br/>
        <br/>
        ID<br/>
        <?php print $img_id;?>
        <br/>
        タイトル<br/>
        <?php print $img_title;?>
        <br/>
        <?php print $disp_file;?>
        <br/>
        このファイルを削除してよろしいですか？<br/>
        <br/>
        <form method="post"action="img_delete_done.php">
            <input type="hidden"name="id"value="<?php print $img_id;?>">
            <input type="hidden"name="gazou_name"value="<?php print $pro_gazou_name;?>">
            <input type="button"onclick="history.back()"value="戻る">
            <input type="submit"value="OK">
        </form>
    </body>
</html>