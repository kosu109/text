<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>個人情報</title>
    </head>
    <body>
        <?php
        try{
            $kadai1_ID=$_POST['staffcode'];
            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $dbh=new PDO($dsn,$user);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='SELECT name FROM mst_staff WHERE code=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$kadai1_ID;
            $stmt->execute($data);

            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            $kojin_name=$rec['name'];

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
        <form method="post"action="staff_edit_check.php">
            <input type="hidden"name="code"value="<?php print $kadai1_ID;?>">
            氏名<br/>
            <input type="text" name="name" style="width:200px"value="<?php print $kojin_name;?>"><br/>

            パスワードを入力してください。<br/>
            <input type="password"name="pass" style="width:100px"><br/>
            パスワードをもう一度入力してください。<br/>
            <input type="password"name="pass2"style="width:100px"><br/>
            <br/>
            <input type="button"onclick="histry.back()"value="戻る">
            <input type="submit"value="OK">
        </form>
    </body>
</html>