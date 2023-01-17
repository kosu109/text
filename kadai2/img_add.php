<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
</head>

<body>
    登録画面<br />
    <br />
    <form method="post" action="img_add_check.php" enctype="multipart/form-data">
        画面のタイトル<br />
        <input type="text" name="title" style="width:200px"><br />
        画像の説明<br/>
        <textarea name="description" cols="50" rows="5"></textarea><br />
        画面のファイルの選択<br />
        <input type="file" name="file" style="width:400px"><br />
        <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
    </form>
</body>

</html>