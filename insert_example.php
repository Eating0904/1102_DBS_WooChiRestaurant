<a href = "index.php"> 回主畫面</a> <p>
<?php
	$dbhost = 'localhost'; 
	$dbuser = 'Day0501';
	$dbpass = '0501';
	$dbname = 'woochi';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die('Error with MySQL connection');
	
	$sql = "INSERT INTO manager (account, password, name, tel, mail) 
	VALUES ('alice','456','alice','0909','gmail')";
	$result = mysqli_query($conn, $sql) or die('MySQL insert error');

	if(mysqli_affected_rows($conn) > 0 ){ //更新資料
		echo"成功";
	}elseif(mysqli_affected_rows($conn) == 0 ){ //沒有更新
		echo"無資料新增";
	}else{
		echo "{$sql} 語法執行失敗，錯誤訊息: ",mysqli_error($conn);
	}
	mysqli_close($conn);
	
	$sql = " 

,
INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','店內來了新寵物，歡迎有緣人來帶牠回家或是來找牠玩','2022-02-08'),

INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','2022/02/28為國定假日公休一日','2022-02-21'),

INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','慶祝白色情人節，2022/03/14當天推出情人節限定套餐','2022-03-01'),

INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','慶祝兒童節，於2022/04/02～04/05來店用餐，12歲以下的兒童免費招待40元甜點乙份(可補差額)','2022-03-23'),

INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','2022/04/20公休一天','2022-04-13'),

INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','店內來了新寵物，歡迎有緣人來帶牠回家或是來找牠玩','2022-05-06'),

INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','在2022/06/01～06/06期間，姓名中有與「端、午、節」任一字同音，可享8折優惠','2022-05-18');
";
mysqli_query($conn, $sql) or die('MySQL insert error')
?>