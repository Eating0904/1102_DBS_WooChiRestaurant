--建news的table
--選擇要參考的key
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = " INSERT INTO news(n_id,u_id, n_information, release_date)
VALUES (1,'$d','2022/01/01為國定假日公休一日','2021-12-23'); ";
mysqli_query($conn, $sql) or die('MySQL insert error');

$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = " INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','春節期間2022/1/31～02/03公休','2022-01-14');";
mysqli_query($conn, $sql) or die('MySQL insert error');

$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = " INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','慶祝情人節，2022/02/14當天推出情人節限定套餐','2022-02-01');";
mysqli_query($conn, $sql) or die('MySQL insert error');

$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = " INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','店內來了新寵物，歡迎有緣人來帶牠回家或是來找牠玩','2022-02-08'); ";
mysqli_query($conn, $sql) or die('MySQL insert error');

$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = " INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','2022/02/28為國定假日公休一日','2022-02-21'); ";
mysqli_query($conn, $sql) or die('MySQL insert error');

$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','慶祝白色情人節，2022/03/14當天推出情人節限定套餐','2022-03-01'); ";
mysqli_query($conn, $sql) or die('MySQL insert error');

$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','慶祝兒童節，於2022/04/02～04/05來店用餐，12歲以下的兒童免費招待40元甜點乙份(可補差額)','2022-03-23'); ";
mysqli_query($conn, $sql) or die('MySQL insert error');

$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','2022/04/20公休一天','2022-04-13'); ";
mysqli_query($conn, $sql) or die('MySQL insert error');

$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = " INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','店內來了新寵物，歡迎有緣人來帶牠回家或是來找牠玩','2022-05-06'); ";
mysqli_query($conn, $sql) or die('MySQL insert error');

$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);/
$d=$row['u_id']; 
$sql = " INSERT INTO news(u_id, n_information, release_date)
VALUES ('$d','在2022/06/01～06/06期間，姓名中有與「端、午、節」任一字同音，可享8折優惠','2022-05-18');" ;
mysqli_query($conn, $sql) or die('MySQL insert error');