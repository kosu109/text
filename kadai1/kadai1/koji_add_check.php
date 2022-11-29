<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>
        <?php

        $koji_ID=$_POST['ID'];
        $koji_name=$_POST['name'];
        $koji_name2=$_POST['name2'];
        $koji_yubin=$_POST['yubin'];
        $koji_jusho=$_POST['jusho'];
        $koji_denwa=$_POST['denwa'];
        $koji_eamil=$_POST['email'];

        $koji_ID=htmlspecialchars($koji_ID,ENT_QUOTES,'UTF-8');
        $koji_name=htmlspecialchars($koji_name2,ENT_QUOTES,'UTF-8');
        $koji_name2=htmlspecialchars($koji_name2,ENT_QUOTES,'UTF-8');
        $koji_yubin=htmlspecialchars($koji_yubin,ENT_QUOTES,'UTF-8');
        $koji_jusho=htmlspecialchars($koji_jusho,ENT_QUOTES,'UTF-8');
        $koji_denwa=htmlspecialchars($koji_denwa,ENT_QUOTES,'UTF-8');
        $koji_eamil=htmlspecialchars($koji_denwa,ENT_QUOTES,'UTF-8');
        
        if($koji_ID==''){
            print'IDが入力されていません。<br />';
        }else{
            print'ID :';
            print $koji_ID;
            print'<br />';
        }

        if($koji_name==''){
            print'氏名が入力されていません。<br />';
        }else{
            print '氏名 :';
            print $koji_name;
            print '<br />';
        }

        if($koji_name2==''){
            print'ふりがなが入力されていません。<br />';
        }else{
            print 'ふりがな :';
            print $koji_name2;
            print '<br />';
        }
        if($koji_yubin==''){
            print'郵便番号が入力されていません。<br />';
        }else{
            print '郵便番号 :';
            print $koji_yubin;
            print '<br />';
        }

        if($koji_jusho==''){
            print'住所が入力されていません。<br />';
        }else{
            print '住所 :';
            print $koji_jusho;
            print'<br />';
        }

        if($koji_denwa==''){
            print'電話番号が入力されていません。<br />';
        }else{
            print '電話番号 :';
            print $koji_denwa;
            print'<br />';
        }

        if($koji_email==''){
            print'Eメールアドレスが入力されていません。<br />';
        }else{
            print 'Eメールアドレス :';
            print $koji_eamil;
            print '<br />';
        }

        if($koji_ID=='' ||$koji_name=='' ||$koji_name2=='' ||$koji_yubin=='' ||
        $koji_jusho=='' ||$koji_denwa=='' ||$koji_email==''){
            print'<form>';
            print'<input type="button"onclick="history.back()"value="戻る">';
            print'</form>';
        }else{
            print'<form method="post"action="staff_add_done.php">';
            print '<input type="hidden"name="name"value="' . $staff_name . '">';
            print '<input type="hidden"name="pass"value="' . $staff_pass . '">';
            print '<br />';
            print '<input type="button"onclick="history.back()"value="戻る">';
            print '<input type="submit"value="OK">';
            print '</form>';

        }
        ?>
    </body>
</html>