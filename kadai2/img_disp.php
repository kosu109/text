<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像ライブラリ</title>
    </head>
    <body>
        <?php
        try{
            $img_id=$_GET['id'];
            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $dbh=new PDO($dsn,$user);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='SELECT title,description,file FROM image WHERE ID=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$img_id;
            $stmt->execute($data);

            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            $img_title=$rec['title'];
            $img_description=$rec['description'];
            $img_file=$rec['file'];

            $dbh=null;
        }
        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
        ?>

        画像の表示</br>

        タイトル<br/>
        <?php print $img_title;?>
        <br/>

        説明<br />
        <?php print $img_description;?>
        <br/>

        <br/>
        <form>
            <input type="button"onclick="history.back()"value="戻る">
        </form>
    </body>
</html>