<?php
	try{
	session_start();
    header('Expires:-1');
    header('Cache-Control:');
    header('Pragma:');
	$userid = $_SESSION['login_user'];
	echo "ようこそ、".$userid."さん<br/>";
	$option = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);
	$pdo = new PDO("mysql:host=localhost;dbname=meitell;charset=utf8","root", "", $option);

        //ファイルアップロードがあったとき
        if (isset($_FILES['upfile']['error']) && is_int($_FILES['upfile']['error']) && $_FILES["upfile"]["name"] !== ""){
            //エラーチェック
            switch ($_FILES['upfile']['error']) {
                case UPLOAD_ERR_OK: // OK
                    break;
                case UPLOAD_ERR_NO_FILE:   // 未選択
                    throw new RuntimeException('ファイルが選択されていません', 400);
                case UPLOAD_ERR_INI_SIZE:  // php.ini定義の最大サイズ超過
                    throw new RuntimeException('ファイルサイズが大きすぎます', 400);
                default:
                    throw new RuntimeException('その他のエラーが発生しました', 500);
            }

            //画像・動画をバイナリデータにする．
            $raw_data = file_get_contents($_FILES['upfile']['tmp_name']);

            //拡張子を見る
            $tmp = pathinfo($_FILES["upfile"]["name"]);
            $extension = $tmp["extension"];
            if($extension === "jpg" || $extension === "jpeg" || $extension === "JPG" || $extension === "JPEG"){
                $extension = "jpeg";
            }
            elseif($extension === "png" || $extension === "PNG"){
                $extension = "png";
            }
            elseif($extension === "gif" || $extension === "GIF"){
                $extension = "gif";
            }
            elseif($extension === "mp4" || $extension === "MP4"){
                $extension = "mp4";
            }
            else{
                echo "非対応ファイルです．<br/>";
                echo ("<a href=\"image.php\">戻る</a><br/>");
                exit(1);
            }

            //DBに格納するファイルネーム設定
            //サーバー側の一時的なファイルネームと取得時刻を結合した文字列にsha256をかける．
            $date = getdate();
            $fname = $_FILES["upfile"]["tmp_name"].$date["year"].$date["mon"].$date["mday"].$date["hours"].$date["minutes"].$date["seconds"];
            $fname = hash("sha256", $fname);

			$_SESSION['fname'] = $fname;

			$sql = "SELECT * FROM bc WHERE user_id = '$userid'";
			$stmt = $pdo -> query($sql);
			$row = null;

			foreach ($stmt as $row){}

			if($row == null){	
				//画像をDBに格納．
				$sql_insert = "INSERT INTO bc(user_id,image,fname) VALUES (:user_id,:image,:fname);";
				$stmt = $pdo->prepare($sql_insert);
				$stmt -> bindParam(':user_id', $userid, PDO::PARAM_STR);
				$stmt -> bindValue(":image",$raw_data, PDO::PARAM_STR);	
				$stmt -> bindValue(":fname",$fname, PDO::PARAM_STR);				
				$stmt -> execute();
			}else if(!empty($userid)){
				//すでに画像が登録されている場合画像を更新．
				$sql_update = "UPDATE bc SET image=:image, fname=:fname WHERE User_ID = '$userid'";
				
				$stmt = $pdo->prepare($sql_update);		
				$stmt -> bindValue(":image",$raw_data, PDO::PARAM_STR);
				$stmt -> bindValue(":fname",$fname, PDO::PARAM_STR);
				$stmt -> execute();
			}
        }

    }
    catch(PDOException $e){
        echo("<p>500 Inertnal Server Error</p>");
        exit($e->getMessage());
    }
?>

<!DOCTYPE HTML>

<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>media</title>
</head>

<body>
    <form action="image.php" enctype="multipart/form-data" method="post">
        <label>画像/動画アップロード</label>
        <input type="file" name="upfile">
        <br>
        ※画像はjpeg方式，png方式，gif方式に対応しています。<br>
        <input type="submit" value="アップロード">
    </form>

    <?php
    //DBから取得して表示する．	
	$sql = "SELECT * FROM bc;";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        $target = $row["fname"];
        if(empty($target)){
			echo "表示する画像はありません";
		}else{
			echo ("<img src='import_media.php?target=$target'>");
			echo ("<br/><br/>");
		}
    }
    ?>

</body>
</html>