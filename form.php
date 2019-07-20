<!DOCTYPE html>
<?php
session_start();
?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>個人情報確認</title>
</head>
<body>
    <?php 
      header('Expires:-1');
      header('Cache-Control:');
      header('Pragma:');
    ?>
    <div id="page-all">
      <div id="header">
          <input type="button" value="ホームへ戻る" id="back_home" onClick="location.href='home.php';">
          <input type="button" value="ログアウト" id="logout" onClick="location.href='logout.php';">
      </div>
      <div id="menu_contents_wrap">
        <div id="contents_wrap">
          <!-- 左に表示させるメニュー(予定なのでまだ追加していません)
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
          -->
          <div id="contents_area">
            <!-- reserve_item_groupクラス内の要素はDBから持ってくる予定-->
            <div class="form_item">
              <div class="reserve_item_title">
                ID番号
                <div class="reserve_item_group">
                  <?php 
                    $columns = array();
                    $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                    $conn = new PDO("mysql:host=localhost;dbname=meitell;charset=utf8",
                      "root", "", $option);
                    $sql = "SELECT * FROM user_info";
                    $stmt=$conn->prepare($sql);
                    $stmt->execute();
                    foreach($conn->query($sql) as $rows){
                      $columns[] = $rows;
                    }
                    /* $columns[0(縦なのでログインユーザーごとに数字を変える必要あり)][0(横なので基本変えない)] */
                    print_r($columns[0][0]);
                  ?>
                </div>
              </div>
            </div>
            <div class="form_item">
              <div class="reserve_item_title">
                名前
                <div class="reserve_item_group">
                  <?php 
                    print $columns[0][1];
                  ?>
                </div>
              </div>
            </div>
            <div class="form_item">
              <div class="reserve_item_title">
                生年月日
                <div class="reserve_item_group">
                  <?php echo $columns[0][2] ?>  
                </div>
              </div>
            </div>
            <div class="form_item">
              <div class="reserve_item_title">
                性別
                <div class="reserve_item_group">
                  <?php 
                    if ($columns[0][3] == "m") {
                      echo "男性";
                    } else {
                      echo "女性";
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="form_item">
              <div class="reserve_item_title">
                電話番号
                <div class="reserve_item_group">
                  <?php echo $columns[0][4] ?>
                </div>
              </div>
            </div>
            <div class="form_item">
              <div class="reserve_item_title">
                大学・専門学校名
                <div class="reserve_item_group">
                  <?php echo $columns[0][5] ?>
                </div>
              </div>
            </div>
            <div class="form_item">
              <div class="reserve_item_title">
                学部・学科
                <div class="reserve_item_group">
                  <?php echo $columns[0][6] ?>
                </div>
              </div>
            </div>
          <!-- 付属要素(過去エピ・キャリアなど)はここで編集するかは未定(2019/6/20)-->
          </div>
        </div>
      </div>
    </div>
    <input type="button" value="変更" onClick="window.open('https://toarise.tales-ch.jp/');">
</body>
</html>
