<?php 
include("conn.php");//資料庫連線
$sql="select* from 商家";//查詢資料庫表名為study_sql所有的資料記錄
$res=mysql_query($sql);//向資料庫傳送一條sql語句
//$arr=mysql_fetch_row($res);//獲取資料庫中的第一條資訊
echo '<table apgn="center" width="800" border="1">';//獲取的資料用表格顯示出來
/*echo '<cabtion><h1>演示表</h1></cabtion>';
while($arr=mysql_fetch_assoc($res)){//取出表study_sql中的所有結果集
echo '<tr>';
foreach($arr as $col){//遍歷資料
echo '<td>'.$col.'</td>';
}
echo "</tr>";
}*/
?>
