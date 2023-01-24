<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
    <link href="img_add.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>登録画面<br /></h1>
    <br />
    <form method="post" action="img_add_check.php" enctype="multipart/form-data">
        <table>
        <th>画面のタイトル</th>
        <tr><br /></tr>
        <td><input type="text" name="title" style="width:200px"></td>
        <tr><br /></tr>
        <th>画像の説明</th>
        <tr><br/></tr>
        <td><textarea name="description" cols="50" rows="5"></textarea></td>
        <tr><br /></tr>
        <th>画面のファイルの選択</th>
        <tr><br /></tr>
        <td><input type="file" name="file" style="width:400px"></td>
        <tr><br /></tr>
        </table>
        <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
    </form>
</body>

</html>