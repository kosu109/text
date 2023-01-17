<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像ライブラリ</title>
    </head>
    <body>
        <?php

        try{
            $img_title=$_POST['title'];
            $img_description=$_POST['description'];
            $img_file=$_POST['file_name'];
            
            $img_title=htmlspecialchars($img_title,ENT_QUOTES,'UTF-8');
            $img_description=htmlspecialchars($img_description,ENT_QUOTES,'UTF-8');
            $img_file=htmlspecialchars($img_file,ENT_QUOTES,'UTF-8');

            $dsn ='mysql:dbname=shop;host=localhost;charset=utf8';
            $user ='root';
            $password='';
            $dbh =new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='INSERT INTO image(title,description,file)VALUES(?,?,?)';
            $stmt=$dbh->prepare($sql);
            $data[]=$img_title;
            $data[]=$img_description;
            $data[]=$img_file;
            $stmt->execute($data);

        $dbh =null;

        print $img_title;
        print 'この画像を登録します。<br />';
        }

        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            print"<br>".$e->getMessage();
            exit();
        }
        ?>

        <a href="img_list.php">戻る</a>
    </body>
</html>