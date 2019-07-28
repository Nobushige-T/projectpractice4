<!DOCTYPE html>
<?php session_start(); ?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
    <script src="preview.js"></script>
    <title>名刺の確認</title>
    <?php 
        header('Expires:-1');
        header('Cache-Control:');
        header('Pragma:');
        // 削除処理(DELETE文?)
    ?>
</head>
<body>
<div id="page_all">
    <div id="header"></div>
    <div id="menu_contents_wrap">
        <div id="contents_wrap">
            <div id="menu_area">
                <div id="menu_wrap">
                    <ul id="menu">
                        <li id="menu_top">トップへ戻る</li>
                        <li id="menu_registration">名刺を登録する</li>
                        <li id="menu_check">名刺を確認する</li>
                        <li id="menu_notice">運営からのお知らせ</li>
                        <li id="menu_help">ヘルプ</li>
                        <li id="menu_inquiry">お問い合わせ</li>
                    </ul>
                </div>
            </div>
            <div id="contents_area">
                <div id="delete_area">
                    <p>削除しました。</p>
                    <div id="delete_btn">
                        <input type="button" value="名刺一覧へ戻る" onClick="location.href='preview.php'">
                        <input type="button" value="ホームへ戻る" onClick="location.href='home.php';">
                        <input type="button" value="ログアウト" onClick="location.href='logout.php';">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>