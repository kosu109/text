<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>個人情報</title>
    </head>
    <body>
        <?php

        $kadai1_ID=$_POST['ID'];
        $kojin_name=$_POST['name'];
        $kojin_name2=$_POST['name2'];
        $kojin_yubin=$_POST['yubin'];
        $kojin_jusho=$_POST['jusho'];
        $kojin_tel=$_POST['tel'];
        $kojin_email=$_POST['email'];

        $kojin_name=htmlspecialchars($kojin_name2,ENT_QUOTES,'UTF-8');
        $kojin_name2=htmlspecialchars($kojin_name2,ENT_QUOTES,'UTF-8');
        $kojin_yubin=htmlspecialchars($kojin_yubin,ENT_QUOTES,'UTF-8');
        $kojin_jusho=htmlspecialchars($kojin_jusho,ENT_QUOTES,'UTF-8');
        $kojin_tel=htmlspecialchars($kojin_tel,ENT_QUOTES,'UTF-8');
        $kojin_email=htmlspecialchars($kojin_email,ENT_QUOTES,'UTF-8');
        
        if($kojin_name==''){
            print'氏名が入力されていません。<br />';
        }else{
            print '氏名 :';
            print $kojin_name;
            print '<br />';
        }

        if($kojin_name2==''){
            print'ふりがなが入力されていません。<br />';
        }else{
            print 'ふりがな :';
            print $kojin_name2;
            print '<br />';
        }
        if($kojin_yubin==''){
            print'郵便番号が入力されていません。<br />';
        }else{
            print '郵便番号 :';
            print $kojin_yubin;
            print '<br />';
        }

        if($kojin_jusho==''){
            print'住所が入力されていません。<br />';
        }else{
            print '住所 :';
            print $kojin_jusho;
            print'<br />';
        }

        if($kojin_tel==''){
            print'電話番号が入力されていません。<br />';
        }else{
            print '電話番号 :';
            print $kojin_tel;
            print'<br />';
        }

        if($kojin_email==''){
            print'Eメールアドレスが入力されていません。<br />';
        }else{
            print 'Eメールアドレス :';
            print $kojin_email;
            print '<br />';
        }

        if($kojin_name=='' ||$kojin_name2=='' ||$kojin_yubin=='' ||
        $kojin_jusho=='' ||$kojin_tel=='' ||$kojin_email==''){
            print'<form>';
            print'<input type="button"onclick="history.back()"value="戻る">';
            print'</form>';
        }else{
            $kojin_name==md5($kojin_name);
            $kojin_name2==md5($kojin_name2);
            $kojin_yubin==md5($kojin_yubin);
            $kojin_jusho==md5($kojin_jusho);
            $kojin_tel==md5($kojin_tel);
            $kojin_email==md5($kojin_email);
            print '<form method="post"action="kojin_edit_done.php">';
            print '<input type="hidden"name="ID"value="' . $kadai1_ID . '">';
            print '<input type="hidden"name="name"value="' . $kojin_name . '">';
            print '<input type="hidden"name="name2"value="' . $kojin_name2 . '">';
            print '<input type="hidden"name="yubin"value="' . $kojin_yubin . '">';
            print '<input type="hidden"name="jusho"value="' . $kojin_jusho . '">';
            print '<input type="hidden"name="denwa"value="' . $kojin_tel . '">';
            print '<input type="hidden"name="email"value="' . $kojin_email . '">';
            print '<br />';
            print '<input type="button"onclick="history.back()"value="戻る">';
            print '<input type="submit"value="OK">';
            print '</form>';

        }
        ?>
    </body>
</html>