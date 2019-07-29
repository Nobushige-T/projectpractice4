<!DOCTYPE html>
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
$option = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);
	$conn = new PDO("mysql:host=localhost;dbname=meitell;charset=utf8",
		"root", "", $option);
	$row = null;
	$sql = "SELECT * FROM user_info WHERE User_ID = 'ASOK'";
	$stmt = $conn -> query($sql);
	foreach ($stmt as $row){}
	?>
	

	<p>名前:<?php echo $row['Name']; ?> </p>
	<p>電話番号:<?php echo $row['Tel']; ?> </p>
	<p>メールアドレス: <?php echo $row['address']; ?></p>
	<p>学校名:<?php echo $row['School']; ?></p>
	<p>学部・学科：<?php echo $row['Faculty']; ?></p>
	<p><?php if($row['certificate1']!=null)echo '保有資格：',$row['certificate1'];?></p>
	<p><?php if($row['past_epi']!=null)echo 'あなたの過去エピソード：',$row['past_epi'];?></p>
	<p><?php if($row['hobby']!=null)echo '趣味：',$row['hobby'];?></p>
	<p><?php if($row['development']!=null)echo '開発経験：',$row['development'];?></p
	
	
	</body>
</html>