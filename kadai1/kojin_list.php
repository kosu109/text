<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>個人情報</title>
</head>

<body>
    <?php
    try {
        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $dbh = new PDO($dsn, $user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT ID,name,name2 FROM kojin WHERE 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = null;

        print '一覧表示<br /><br />';

        print'<form method="post"action="kojin_branch.php">';
        while (true) {
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($rec == false) {
                break;
            }

            print'<input type="radio"name="ID"value="'.$rec['ID'].'">';
            print $rec['name'];
            print $rec['name2'];
            print '<br />';
        }
        print'<input type="submit"name="disp"value="参照">';
        print'<input type="submit"name="add"value="追加">';
        print'<input type="submit"name="edit"value="修正">';
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