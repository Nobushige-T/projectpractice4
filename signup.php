<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>登録中</title>
    <?php 
        /* 新規登録のDB登録書くところ */
    ?>
</head>
<body>
<div id="page_all">
    <div id="header"></div>
    <div id="menu_contents_wrap">
        <div id="contents_wrap">
            <!-- 左に表示させるメニュー(予定なのでまだ追加していません)
            <div id="menu_area">
                
            </div>
            -->
            <div id="contents_area">
                <form action="tourokukari.html" method="post">
                    <p class="desc"><span class="required">必須</span>ユーザーID</p>
                    <input type="text" id="userid">
                    <p class="desc"><span class="required">必須</span>名前</p>
                    <input type="text" id="name">
                    <p class="desc"><span class="required">必須</span>生年月日</p>
                    <input type="date" name="date">
                    <p class="desc"><span class="required">必須</span>性別</p>
                    <select name="sex"><option value="">-</option><option value="man">男</option><option value="woman">女</option></select>
                    <p class="desc"><span class="required">必須</span>電話番号</p>
                    <input type="tel" name="tel">
                    <br><input type="submit" value="登録する">
                    <!-- 初期登録(名前,年齢,ID etc.)はメールアドレスに飛ばしたURLから登録するのかそのまま進むのかどっち？
                        (https://qiita.com/isotai/items/f810493dd192e0597f3a) -->
                </form>
            </div>
        </div>
    </div>
</body>
</html>