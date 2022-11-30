<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>個人情報</title>
    </head>
    <body>
        <?php
        try{
            $kadai1_ID=$_POST['kadai1ID'];
            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $dbh=new PDO($dsn,$user);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='SELECT name FROM kadai1_ID WHERE code=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$kadai1_ID;
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

        スタッフ修正<br/>
        <br/>
        スタッフコード<br/>
        <?php print $kadai1_ID;?>
        <br/>
        <br/>
        <form method="post"action="kojin_edit_check.php">
            <input type="hidden"name="code"value="<?php print $kadai1_ID;?>">
            氏名<br/>
            <input type="text" name="name" style="width:200px"value="<?php print $kojin_name;?>"><br/>
            <br/>
            <input type="button"onclick="histry.back()"value="戻る">
            <input type="submit"value="OK">
        </form>
    </body>
</html>