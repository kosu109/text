<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
</head>

<body>
    <?php
    try {
        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $dbh = new PDO($dsn, $user,"");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT id,title,file FROM image WHERE 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = null;

        print '画像一覧<br />';

        print'<form method="post"action="img_branch.php">';
        while (true) {
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($rec == false) {
                break;
            }
            print ' <input type="radio"name="imgcode"value="'.$rec['id'].'">'."\n";
            print $rec['title'];
            print $rec['file'];
            print '<br />';
        }
        print'<input type="submit"name="disp"value="参照">';
        print'<input type="submit"name="add"value="追加">';
        print'<input type="submit"name="delete"value="削除">';
        print'</form>';

    } catch (Exception $e) {
        print 'ただいま障害により大変ご迷惑をお掛けしております。';
        print '<br>' .$e->getMessage();
        exit();
    }
    ?>
</body>

</html>