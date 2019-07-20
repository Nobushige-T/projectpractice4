<!DOCTYPE html>
<?php session_start(); ?>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>MeiTell</title>
        <?php 
            header('Expires:-1');
            header('Cache-Control:');
            header('Pragma:');
        ?>
</head>
<body>
<div id="logout_area">
    <div id="logout_explain">
        <p>MeiTellからログアウトしますか？</p>
        <div id="logout_detail">
            いつでもログインし直すことができます。<br>
            <div id="logout_btns">
                <input type="button" class="logout_btn" value="キャンセル" onClick="history.back();">
                <input type="button" class="logout_btn" value="ログアウト" onClick="location.href='logout_pr.php'">
            </div>
        </div>
    </div>
</div>
</body>
</html>