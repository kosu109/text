<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>個人情報</title>
    </head>
    <body>
        <?php

        try{
            $koji_name=$_POST['name'];
            $koji_name2=$_POST['name2'];
            $koji_yubin=$_POST['yubin'];
            $koji_jusho=$_POST['jusho'];
            $koji_denwa=$_POST['tel'];
            $koji_email=$_POST['email'];

            $koji_name=htmlspecialchars($koji_name,ENT_QUOTES,'UTF-8');
            $koji_name2=htmlspecialchars($koji_name2,ENT_QUOTES,'UTF-8');
            $koji_yubin=htmlspecialchars($koji_yubin,ENT_QUOTES,'UTF-8');
            $koji_jusho=htmlspecialchars($koji_jusho,ENT_QUOTES,'UTF-8');
            $koji_denwa=htmlspecialchars($koji_tel,ENT_QUOTES,'UTF-8');
            $koji_email=htmlspecialchars($koji_email,ENT_QUOTES,'UTF-8');

            $dsn ='mysql:dbname=shop;host=localhost;charset=utf8';
            $user ='root';
            $password='';
            $dbh =new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='INSERT INTO kadai1(name,name2,yubin,jusho,tel,email)VALUES(?,?)';
            $stmt=$dbh->prepare($sql);
            $data[]=$kojin_name;
            $data[]=$kojin_name2;
            $data[]=$kojin_yubin;
            $data[]=$kojin_jusho;
            $data[]=$kojin_tel;
            $data[]=$kojin_email;
            $stmt->execute($data);

        $dbh =null;

        print $kojin_name;
        print 'さんを登録しました。<br />';
        }

        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            print"<br>".$e->getMessage();
            exit();
        }
        ?>

        <a href="staff_list.php">戻る</a>
    </body>
</html>