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
    <script src="js/preview.js"></script>
    <script src="js/menu.js"></script>
    <title>名刺の確認</title>
    <?php 
        header('Expires:-1');
        header('Cache-Control:');
        header('Pragma:');
    ?>
</head>
<body>
<div id="page_all">
    <div id="header">
        <input type="button" value="ホームへ戻る" id="back_home" onClick="location.href='home.php';">
        <input type="button" value="ログアウト" id="logout" onClick="location.href='logout.php';">
    </div>
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
                <p class="desc">作成した名刺</p>
                <div class="bc_contents">
                    <div class="bc_image">
                        <a href="images/amber.jpg" data-lightbox="bc_images">
                            <img src="images/amber.jpg" alt="bc_image1" class="bc_imagedata">
                        </a>
                    </div>
                    <div class="bc_details">
                        <div class="bc_title">
                            <!-- dummyです。タイトル名は保存可能？ -->
                            タイトル：お試し名刺
                        </div>
                        <div class="bc_creation_date">
                            <!-- dummyです。後で作成日引っ張れるようにできたら便利？ -->
                            制作日：2019年6月13日
                        </div>
                        <div class="bc_edit">
                            <!-- 編集と新規作成は同じでokかどうか。編集から飛んだ場合は前に作ったデータを持ち込みたい -->
                            <input type="button" value="編集する" onClick="location.href='./create.php'">
                        </div>
                        <div class="bc_delete">
                            <input type="button" value="削除する" onClick="MoveCheck()">
                        </div>
                    </div>
                </div>
                <div class="bc_contents">
                    <div class="bc_image">
                        <a href="images/horizon_green.jpg" data-lightbox="bc_images">
                            <img src="images/horizon_green.jpg" alt="bc_image2">
                        </a>
                    </div>
                    <div class="bc_details">
                        <div class="bc_title">
                            <!-- dummyです。タイトル名は保存可能？ -->
                            タイトル：就活用名刺
                        </div>
                        <div class="bc_creation_date">
                            <!-- dummyです。後で作成日引っ張れるようにできたら便利？ -->    
                            制作日：2018年4月28日
                        </div>
                        <div class="bc_edit">
                            <!-- 編集と新規作成は同じでokかどうか。編集から飛んだ場合は前に作ったデータを持ち込みたい -->
                            <input type="button" value="編集する" onClick="location.href='./create.php'">
                        </div>
                        <div class="bc_delete">
                            <input type="button" value="削除する" onClick="MoveCheck()">
                        </div>
                    </div>
                </div>
                <div class="bc_contents">
                    <div class="bc_image">
                        <a href="images/triangle.jpg" data-lightbox="bc_images">
                            <img src="images/triangle.jpg" alt="bc_image3">
                        </a>
                    </div>
                    <div class="bc_details">
                        <div class="bc_title">
                            <!-- dummyです。タイトル名は保存可能？ -->
                            タイトル：Business Card
                        </div>
                        <div class="bc_creation_date">
                            <!-- dummyです。後で作成日引っ張れるようにできたら便利？ -->
                            制作日：2018年10月18日
                        </div>
                        <div class="bc_edit">
                            <!-- 編集と新規作成は同じでokかどうか。編集から飛んだ場合は前に作ったデータを持ち込みたい -->
                            <input type="button" value="編集する" onClick="location.href='./create.php'">
                        </div>
                        <div class="bc_delete">
                            <input type="button" value="削除する" onClick="MoveCheck()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>