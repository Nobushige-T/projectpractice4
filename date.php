<!DOCTYPE html>
<?php session_start(); ?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no,width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
    <title>MeiTell replica</title>
</head>
<body>
<?php
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');
$option = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);
	$conn = new PDO("mysql:host=localhost;dbname=meitell;charset=utf8",
		"root", "", $option);
	$row = null;
	$userid = $_SESSION['login_user'];
	$sql = "SELECT * FROM user_info WHERE user_id = '$userid'";
	$stmt = $conn -> query($sql);
	foreach ($stmt as $row){}
	?>
	

	<p>名前:<?php echo $row['name']; ?> </p>
	<p>電話番号:<?php echo $row['tel']; ?> </p>
	<p>メールアドレス: <?php echo $row['mail']; ?></p>
	<p>学校名:<?php echo $row['school']; ?></p>
	<p>学部・学科：<?php echo $row['faculty']; ?></p>
	<p><?php if($row['certificate1']!=null)echo '保有資格：',$row['certificate1'];?></p>
	<p><?php if($row['past_epi']!=null)echo 'あなたの過去エピソード：',$row['past_epi'];?></p>
	<p><?php if($row['hobby']!=null)echo '趣味：',$row['hobby'];?></p>
	<p><?php if($row['development']!=null)echo '開発経験：',$row['development'];?></p>
	
	
	</body>
</html>