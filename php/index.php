<!--<form name="form1" method="post" action="insert.php" >
<input type="submit" value="送出">
</form>-->  

<form method="post" action="login.php">
	<input type='text' name='account' placeholder="請輸入帳號">
	<input type='password' name='password' placeholder="請輸入密碼">
	<input type="submit" value="登入">
</form>

<h4> "會員註冊" </h4>
<form method="post" action="signup.php">
	<input type='text' name='account' placeholder="請輸入帳號">
	<input type='password' name='password' placeholder="請輸入密碼">
	<input type='text' name='name' placeholder="請輸入名字">
	<input type='text' name='tel' placeholder="請輸入電話">
	<input type='text' name='mail' placeholder="請輸入郵件">
	<input type="submit" value="會員註冊">
</form>

<form name="店家資料" method="post" action="restaurant.php" >
<input type="submit" value="顯示店家資料">
</form>  

<form name="最新消息" method="post" action="news.php" >
<input type="submit" value="顯示最新消息">
</form>

<form name="評論" method="post" action="rate.php" >
<input type="submit" value="顯示評論">
</form>

<form name="寵物資訊" method="post" action="pets.php" >
<input type="submit" value="顯示寵物資訊">
</form>

<form name="menu" method="post" action="menu.php" >
<input type="submit" value="顯示菜單">
</form>

<form name="店內守則" method="post" action="rules.php" >
<input type="submit" value="顯示店內守則">
</form>

<form name="會員專區" method="post" action="customer.php" >
	<input type="submit" value="顯示會員資料(u_id=2)">
</form> 



<h4> "新增評論" </h4>
<form name="評論" method="post" action="insert_rate.php" >
<input type='text' name='star' placeholder="星星數">
<input type='text' name='content' placeholder="內容">
<input type="submit" value="會員評論">
</form>

<h4> "回覆評論(r_id預設1)" </h4> 
<form name="回覆評論" method="post" action="reply_rate.php" >
<input type='text' name='content' placeholder="回覆內容">
<input type="submit" value="回覆">
</form>

<h4> "訂位" </h4>
<form name="訂位" method="post" action="insert_order.php" >
	<input type='text' name='time' placeholder="時間">	
	<input type='text' name='people' placeholder="訂位人數">
	<input type='text' name='seat' placeholder="區域">
	<input type='text' name='adopt' placeholder="領養意願">
	<input type='text' name='note' placeholder="備註">
	<input type="submit" value="訂位">
</form>
<form name="訂單" action="show_order.php" >
	<input type="submit" value="顯示訂單資料(u_id=2)">
</form> 

<!-- 
<form name="編輯會員資料" method="post" action="editor_customer.php" >
	<input type='text' name='name' placeholder="名字">	
	<input type='text' name='phone' placeholder="電話">
	<input type='text' name='mail' placeholder="郵件">
	<input type="submit" value="編輯會員資料">
</form>  -->
<?php	
	$dbhost = '127.0.0.1';
	$dbuser = 'wu';
	$dbpass = '0422';
	$dbname = 'woochi';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
?>