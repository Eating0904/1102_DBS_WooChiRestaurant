creat table images(
    i_id int not null AUTO_INCREMENT,
    u_id int not null,
    image varchar(50) not null unique,
    primary key(i_id),
    Foreign key (u_id) references restaurant(u_id)
);
	$sql = "SELECT u_id FROM restaurant WHERE name = '屋吉寵物友善餐廳'; ";
	$result = mysqli_query($conn, $sql) or die('MySQL select error');
	$row = mysqli_fetch_assoc($result);
	$d=$row['u_id']; 
	$sql = "INSERT INTO images (u_id,image) VALUES ('$d','../static/img/menu/p11.PNG'); ";
	$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');