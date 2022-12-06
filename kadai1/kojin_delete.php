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

            $sql='SELECT name FROM kojin WHERE ID=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$kojin_ID;
            $deta[]=$kojin_name;
            $data[]=$kojin_name2;
            $data[]=$kojin_yubin;
            $data[]=$kojin_jusho;
            $data[]=$kojin_tel;
            $data[]=$kojin_email;
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

        氏名削除<br/>
        <br/>
        ID<br/>
        <?php print $kojin_ID;?>
        <br/>
        氏名<br />
        <?php print $kojin_name;?>
        <br />
        この氏名を削除してもよろしいですか？<br />
        <br/>
        <form method="post"action="kojin_delete_done.php">
            <input type="hidden"name="ID"value="<?php print $kojin_ID;?>">
            <input type="button"onclick="histry.back()"value="戻る">
            <input type="submit"value="OK">
        </form>
    </body>
</html>