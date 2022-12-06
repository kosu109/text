<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>個人情報</title>
    </head>
    <body>
        <?php
        try{
            $kojin_ID=$_GET['ID'];
            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $dbh=new PDO($dsn,$user);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='DELETE FROM kojin WHERE ID=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$kojin_ID;
            $stmt->execute($data);

            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            $kojin_name=$rec['name'];
            $kojin_name2=$rec['name2'];
            $kojin_yubin=$rec['yubin'];
            $kojin_jusho=$rec['jusho'];
            $kojin_tel=$rec['tel'];
            $kojin_email=$rec['email'];

            $dbh=null;
        }
        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
        ?>

        削除しました。<br/>
        <br/>
            <a href="kojin_list.php">戻る</a>
    </body>
</html>