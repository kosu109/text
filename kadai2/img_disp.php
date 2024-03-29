<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像ライブラリ</title>
        <link href="img_disp.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        try{
            $img_code=$_GET['imgcode'];
            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $dbh=new PDO($dsn,$user,"");
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='SELECT title,description,file FROM image WHERE id=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$img_code;
            $stmt->execute($data);

            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            $img_title=$rec['title'];
            $img_description=$rec['description'];
            $img_file_name=$rec['file'];

            $dbh=null;

            if($img_file_name==''){
                $disp_file='';
            }else{
                $disp_file='<img src="./image/'.$img_file_name.'">';
            }
        }
        catch(Exception $e){
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
        ?>

        <h1>画像の表示</br></h1>
        
        [タイトル]
        <?php print $img_title;?>
        <br/>
        <br/>
        [説明]
        <?php print $img_description;?>
        <br/>
        <?php print $disp_file;?>
        <br/>
        <br />
        <form>
            <input type="button"onclick="history.back()"value="戻る">
        </form>
    </body>
</html>