<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>個人情報</title>
    </head>
    <body>
        <?php

        try{

            $kojin_ID=$_POST['ID'];
            $kojin_name=$_POST['name'];
            $kojin_name2=$_POST['name2'];
            $kojin_yubin=$_POST['yubin'];
            $kojin_jusho=$_POST['jusho'];
            $kojin_tel=$_POST['tel'];
            $kojin_email=$_POST['email'];

            $kojin_name=htmlspecialchars($kojin_name,ENT_QUOTES,'UTF-8');
            $kojin_name2=htmlspecialchars($kojin_name2,ENT_QUOTES,'UTF-8');
            $kojin_yubin=htmlspecialchars($kojin_yubin,ENT_QUOTES,'UTF-8');
            $kojin_jusho=htmlspecialchars($kojin_jusho,ENT_QUOTES,'UTF-8');
            $kojin_tel=htmlspecialchars($kojin_tel,ENT_QUOTES,'UTF-8');
            $kojin_email=htmlspecialchars($kojin_email,ENT_QUOTES,'UTF-8');

            $dsn ='mysql:dbname=shop;host=localhost;charset=utf8';
            $user ='root';
            $dbh =new PDO($dsn,$user);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql= 'UPDATE kojin SET name=?,name2=?,yubin=?,jusho=?,tel=?,email=? WHERE ID=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$kojin_name;
            $data[]=$kojin_name2;
            $data[]=$kojin_yubin;
            $data[]=$kojin_jusho;
            $data[]=$kojin_tel;
            $data[]=$kojin_email;
            $data[]=$kojin_ID;
            $stmt->execute($data);

        $dbh =null;

        }

        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            print"<br>".$e->getMessage();
            exit();
        }
        ?>
        修正しました。<br />
        <br />
        <a href="staff_list.php">戻る</a>
    </body>
</html>