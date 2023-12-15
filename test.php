<?php
    
    if (isset($_POST['name'])) {

        if ($_POST['name'] == '山條') {
            $user = '山條さんはユーザです';
        } else {
            $user = $_POST['name'] . 'さんはユーザではありません';
        }
    } else {
        $user = "";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="" method="post">
            <input type="text" name="name">
            <p><input type="submit" value="送信"></p>        
        </form>
        <table>
            <tr>
                <th>ユーザ情報</th>
                <td><?=$user?></td>
            </tr>
        </table>    
    </body>
</html>