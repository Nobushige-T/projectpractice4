<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>ホーム画面</title>
    <?php 
        $userid = isset($_POST['userid'])? 
        $_POST['userid']: null;
        $password = isset($_POST['password'])? 
        $_POST['password']: null;
    
        if(!empty($userid) && !empty($password)){
            $option = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $conn = new PDO("mysql:host=localhost;dbname=projectpractice4;charset=utf8",
                "root", "Sweet1231", $option);
            $sql = "SELECT * FROM user "
                ."WHERE User_ID ='{$userid}' AND "
                ."Password='{$password}'";
            $result = $conn->query($sql);
            $u = $result->fetch();
            if(!empty($u)){
                session_start();
                $_SESSION['user_id'] = $userid;
                echo "ようこそ、".$_SESSION['user_id']."さん";
            }else{
                echo '認証できませんでした';
            }
        }else{
            header("location: ./title.html");
        }
    ?>
</head>
<body>
    <input type="button" value="ログアウト" id="logout" onClick="location.href='logout.php';">
    <p class="desc">名刺の新規登録はこちら</p>
    <input type="button" value="登録する" onClick="location.href='./index.php'">
    <p class="desc">制作した名刺の確認はこちら</p>
    <input type="button" value="確認する" onClick="window.open('https://toarise.tales-ch.jp/');">
    <p class="desc">個人情報の確認・変更はこちら</p>
    <input type="button" value="確認する" onClick="window.open('https://runefactory.marv.jp/series/rf5/');">
</body>
</html>