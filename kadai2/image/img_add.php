<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
</head>

<body>
    追加<br />
    <br />
    <form method="post" action="img_add_check.php" enctype="multipart/form-data">
        IDを入力してください<br />
        <input type="text" name="id" style="width:200px"><br />
        タイトルを入力してください。<br />
        <input type="text" name="title" style="width:50px"><br />
        サムネイルを選んでください。<br />
        <input type="file" name="file" style="width:400px"><br />
        <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
    </form>
</body>

</html>