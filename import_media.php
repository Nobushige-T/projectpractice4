<?php
    if(isset($_GET["target"]) && $_GET["target"] !== ""){
        $target = $_GET["target"];
    }
    else{
        header("Location: image.php");
    }
    $MIMETypes = array(
        'png' => 'image/png',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif'
    );
    try {
		$option = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);
        $pdo = new PDO("mysql:host=localhost;dbname=meitell;charset=utf8",		"root", "", $option);
        $sql = "SELECT * FROM bc";
        $stmt = $pdo->prepare($sql);
        $stmt -> execute();
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        echo ($row["image"]);
    }
    catch (PDOException $e) {
        echo("<p>500 Inertnal Server Error</p>");
        exit($e->getMessage());
    }
?>