--建pets的table age=0 未滿一歲
--1
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(p_id, u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES (1,'$d','抖宅','../static/img/pets/抖宅.jpg','母','2','小型犬','法鬥','人人好、愛睡覺、喜歡咬玩具','y','y');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--2
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','發財','../static/img/pets/發財.jpg','公','3','中型犬','柴犬','活潑好動、學習能力強、喜歡吃零食','n','y');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--3
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','魯魯','../static/img/pets/魯魯.jpg','母','1','中型犬','米克斯','會護食、適應能力高、喜歡戶外奔跑','y','n');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--4
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','歐卡','../static/img/pets/歐卡.jpg','公','0','小型犬','臘腸','溫馴親人、傻裡傻氣、喜歡散步','n','n');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--5
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','咪咪','../static/img/pets/咪咪.jpg','母','0','小型犬','馬爾濟斯','愛吠叫、好奇心強、愛乾淨喜歡洗澡','n','n');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--6
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','布丁','../static/img/pets/布丁.jpg','公','5','小型犬','貴賓','會爭寵、聰明伶俐、有些神經質','y','y');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--7
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','阿肥','../static/img/pets/阿肥.jpg','母','2','小型犬','柯基','愛咬玩具、易受驚嚇、喜歡跟著人','n','n');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--8
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','噗呲','../static/img/pets/噗呲.jpg','公','3','小型犬','吉娃娃','不愛與狗狗互動、愛吃零食、易受驚嚇','y','y');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
-----貓咪的
--(1)
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','阿努','../static/img/pets/阿努.jpg','公','1','貓','米克斯','好奇心強、愛玩玩具、活潑好動','n','y');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--(2)
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','布布','../static/img/pets/布布.jpg','公','4','貓','貍花貓','有些神經質、傲嬌、厭世感重','y','y');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--(3)
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','可樂','../static/img/pets/可樂.jpg','母','5','貓','波斯貓','溫和冷靜、親人、喜歡發呆','y','n');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--(4)
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id'];
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','黏黏','../static/img/pets/黏黏.jpg','公','0','貓','豹貓','黏人愛撒嬌、貪吃不挑食、喜歡玩耍','n','n');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--(5)
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','饅頭','../static/img/pets/饅頭.jpg','母','2','貓','短毛貓','膽小怕生、愛睡覺、黏人愛撒嬌','y','y');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--(6)
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','麥迪沙','../static/img/pets/麥迪沙.jpg','公','3','貓','摺耳貓','溫馴親人、好奇心強、喜歡玩玩具','n','y');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--(7)
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','芬達','../static/img/pets/芬達.jpg','母','0','貓','布偶貓','溫馴親人、愛乾淨、喜歡被摸','y','n');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');
--(8)
$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
$sql = "INSERT INTO pets(u_id, p_Name, photo, gender, age, size, variety, p_description, microchip, ligation)
VALUES ('$d','肉包','../static/img/pets/肉包.jpg','母','1','貓','藍貓','會護食、適應能力強、好奇心強','y','y');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');