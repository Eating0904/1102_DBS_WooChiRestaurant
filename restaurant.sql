--建restaurant的table
--選擇要參考的key
$sql = "SELECT u_id FROM users WHERE account='eating';";
$result = mysqli_query($conn, $sql) or die('MySQL select error');
--存放在d
$row = mysqli_fetch_assoc($result);
$d=$row['u_id']; 
--把d insert進去
$sql = "INSERT INTO reataurant(u_id,name, mail, phone, location, opening_hour, description)  
VALUES ('$d','屋吉寵物友善餐廳','dogcat2022@gmail.com.tw',0424517250,'台中市西屯區文華路100號','週一至週日 10:00-18:00','屋吉寵物友善餐廳位於台中西屯區，附近非常好停車，它不僅是一間寵物友善餐廳，更是一間浪浪的中途學校！希望可以給牠們一個家。店內不只有各式美味的料理，還有超級可愛的毛小孩們～想要領養的人也一定要衡量自己有沒有時間金錢把孩子帶好喔!');";
$r2 = mysqli_query($conn, $sql) or die('MySQL insert error');