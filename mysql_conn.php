<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db_server = "localhost";
$db_name = "quotation_db";
$db_user = "root";
$db_passwd = "88cherry";
$con = mysqli_connect($db_server, $db_user, $db_passwd,$db_name);

//對資料庫連線
if (mysqli_connect_errno($con)) 
{ 
    echo "連接 MySQL 失敗: " . mysqli_connect_error(); 
} 


?> 