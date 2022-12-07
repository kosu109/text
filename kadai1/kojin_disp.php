<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>個人情報</title>
        <link href="kojin_disp.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        try{
            $kojin_ID=$_GET['ID'];
            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $dbh=new PDO($dsn,$user);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='SELECT name,name2,yubin,jusho,tel,email FROM kojin WHERE ID=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$kojin_ID;
            $stmt->execute($data);

            echo"<div class=kakoi>";
            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            $kojin_name=$rec['name'];
            $kojin_name2=$rec['name2'];
            $kojin_yubin=$rec['yubin'];
            $kojin_jusho=$rec['jusho'];
            $kojin_tel=$rec['tel'];
            $kojin_email=$rec['email'];
            echo"</div>";

            $dbh=null;
        }
        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
        ?>

        情報参照<br/>
        <br/>
        ID<br/>
        <?php print $kojin_ID;?>
        <br/>
        氏名<br />
        <?php print $kojin_name;?>
        <br/>
        ふりがな<br />
        <?php print $kojin_name2;?>
        <br/>
        郵便番号<br />
        <?php print $kojin_yubin;?>
        <br/>
        住所<br />
        <?php print $kojin_jusho;?>
        <br/>
        電話番号<br />
        <?php print $kojin_tel;?>
        <br/>
        Eメールアドレス<br />
        <?php print $kojin_email;?>
        <br/>
        <br/>
        <form>
            <input type="button"onclick="history.back()"value="戻る">
        </form>
    </body>
</html>