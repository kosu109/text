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
            $img_file=$_POST['file'];
            $_gazou_name=$_POST['gazou_name'];
            
            $pro_name=htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
            $pro_price=htmlspecialchars($pro_price,ENT_QUOTES,'UTF-8');

            $dsn ='mysql:dbname=shop;host=localhost;charset=utf8';
            $user ='root';
            $password='';
            $dbh =new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='INSERT INTO mst_product(name,price,gazou)VALUES(?,?,?)';
            $stmt=$dbh->prepare($sql);
            $data[]=$pro_name;
            $data[]=$pro_price;
            $data[]=$pro_gazou_name;
            $stmt->execute($data);

        $dbh =null;

        print $pro_name;
        print 'を追加しました。<br />';
        }

        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            print"<br>".$e->getMessage();
            exit();
        }
        ?>

        <a href="pro_list.php">戻る</a>
    </body>
</html>