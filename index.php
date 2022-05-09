<!--<form name="form1" method="post" action="insert.php" >
<input type="submit" value="送出">
</form>-->  

<form method="post" action="login.php">
	<input type='text' name='account' placeholder="請輸入帳號">
	<input type='password' name='password' placeholder="請輸入密碼">
	<input type="submit" value="登入">
</form>
<!--<h3> "會員註冊" </h3>
<form method="post" action="signup.php">
	<input type='text' name='account' placeholder="請輸入帳號">
	<input type='password' name='password' placeholder="請輸入密碼">
	<input type='text' name='name' placeholder="請輸入名字">
	<input type='text' name='tel' placeholder="請輸入電話">
	<input type='text' name='mail' placeholder="請輸入郵件">
	<input type="submit" value="會員註冊">
</form>
-->

<!-- <form name="店家資料" method="post" action="restaurant.php" >
<input type="submit" value="店家資料">
</form>  -->
<!--
點店家資料會顯示->才有辦法編輯
-->


<!-- <form name="最新消息" method="post" action="news.php" >
<input type="submit" value="最新消息">
</form>


<form name="訂單資訊" method="post" action="order.php" >
<input type="submit" value="訂單資訊">
</form>



<form name="寵物資訊" method="post" action="pets.php" >
<input type="submit" value="寵物資訊">
</form> -->

<!--
<h3> "訂位" </h3>
<form name="訂位" method="post" action="reserve.php" >
	<input type='text' name='會員' placeholder="是否同會員資料">	
	<input type='text' name='區域' placeholder="區域">
	<input type='text' name='人數' placeholder="訂位人數">
	<input type="submit" value="訂位">
</form>
-->

<form name="會員專區" method="post" action="customer.php" >
	<input type="submit" value="GOGO會員專區">
</form>
<!-- 
<form name="rate" method="post" action="rate.php" >
	<input type="submit" value="評價">
</form> -->

<?php	
	$dbhost = '127.0.0.1';
	$dbuser = 'wu';
	$dbpass = '0422';
	$dbname = 'woochi';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
?>