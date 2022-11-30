<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>個人情報</title>
    </head>
    <body>
        一覧表示<br/>
        <br/>
        <form method ="post"action ="kojin_add_check.php">
            氏名<br/>
            <input type="text"name="name"style="width:200px"><br/>
            ふりがな<br/>
            <input type="text"name="name2"style="width:200px"><br/>
            郵便番号<br/>
            <input type="text"name="yubin"style="width:200px"><br/>
            住所<br/>
            <input type="text"name="jusho"style="width:200px"><br/>
            電話番号<br/>
            <input type="text"name="tel"style="width:200px"><br/>
            Eメールアドレス<br/>
            <input type="text"name="email"style="width:200px"><br/>
            <br/>
            <input type="button"onclick="history.back()"value="戻る">
            <input type="submit"value="OK">
        </form>
    </body>
</html>