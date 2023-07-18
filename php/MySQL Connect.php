<?php
	// 定義資料庫資訊
	$DB_NAME = "admin_monkeychef"; // 資料庫名稱
	$DB_USER = "admin"; // 資料庫管理帳號
	$DB_PASS = "monkeychef"; // 資料庫管理密碼
	$DB_HOST = "127.0.0.1"; // 資料庫位址

	// 連接 MySQL 資料庫伺服器
	$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS);
	if (empty($con)) {
		print mysqli_error($con);
		die("資料庫連接失敗！");
	}

	// 選取資料庫
	if (!mysqli_select_db($con, $DB_NAME)) {
		die("選取資料庫失敗！");
	} else {
		echo "連接 " . $DB_NAME . " 資料庫成功！<br>";
	}

	// 設定連線編碼
	mysqli_query($con,"SET CHARACTER SET UTF8");
?>