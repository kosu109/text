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
            $data[]=$kojin_name;
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

        情報参照<br/>
        <br/>
        ID<br/>
        <?php print $kojin_ID;?>
        <br/>
        氏名<br />
        <?php print $kojin_name;?>
        <br/>
        <br/>
        <form>
            <input type="button"onclick="histry.back()"value="戻る">
        </form>
    </body>
</html>