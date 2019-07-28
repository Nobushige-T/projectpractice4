<!DOCTYPE html>
<?php session_start(); ?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/menu.js"></script>
    <title>ホーム画面</title>
    <?php 
        header('Expires:-1');
        header('Cache-Control:');
        header('Pragma:');

        echo "ようこそ、".$_SESSION['login_user']."さん";
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
                    <li id="menu_top" href="home.php"><img src="images/home-solid.svg" class="menu_img"><div class="list_cha">トップへ戻る</div></li>
                    <li id="menu_registration" href="create.php"><img src="images/address-card-regular.svg" class="menu_img"><div class="list_cha">名刺を登録する</div></li>
                    <li id="menu_check" href="preview.php"><img src="images/check-square-regular.svg" class="menu_img"><div class="list_cha">名刺を確認する</div></li>
                    <li id="menu_notice" href="https://toarise.tales-ch.jp/"><img src="images/info-circle-solid.svg" class="menu_img"><div class="list_cha">運営からのお知らせ</div></li>
                    <li id="menu_help" href="https://www.hakuhodo.co.jp/"><img src="images/question-circle-regular.svg" class="menu_img"><div class="list_cha">よくある質問</div></li>
                    <li id="menu_inquiry" href="https://coconala.com/inquiry"><div class="list_cha">お問い合わせ</div></li>
                    </ul>
                </div>
            </div>
            <div id="contents_area">
                <input type="button" value="ログアウト" id="logout" onClick="location.href='logout.php';">
                <p class="desc">名刺の新規登録はこちら</p>
                <input type="button" value="登録する" onClick="location.href='create.php'">
                <p class="desc">制作した名刺の確認はこちら</p>
                <input type="button" value="確認する" onClick="location.href='preview.php'">
                <p class="desc">個人情報の確認・変更はこちら</p>
                <input type="button" value="確認する" id="Change" onClick="location.href='form.php';">
            </div>
        </div>
    </div>
</div>
</body>
</html>