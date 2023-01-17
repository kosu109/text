<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像ライブラリ</title>
    </head>
    <body>
        <?php
        try{
            $img_cord=$_POST['imgcord'];
            $img_file_name=$_FILES['file_name'];

            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $dbh=new PDO($dsn,$user);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            print"<pre>";
            $sql='DELETE FROM image WHERE id=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$img_cord;
            $stmt->execute($data);

            $dbh=null;
        }
        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
        ?>

        削除しました。<br/>
        <br/>
            <a href="img_list.php">戻る</a>
    </body>
</html>