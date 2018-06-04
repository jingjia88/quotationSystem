<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
// $db_server = "localhost";
// $db_name = "quotation_db";
// $db_user = "root";
// $db_passwd = "88cherry";
// $con = mysqli_connect($db_server, $db_user, $db_passwd,$db_name);

// //對資料庫連線
// if (mysqli_connect_errno($con)) 
// { 
//     echo "連接 MySQL 失敗: " . mysqli_connect_error(); 
// } 

$dsn = 'pgsql:dbname=d8iko02h2irldp;host=ec2-54-235-132-202.compute-1.amazonaws.com';
$user = 'tqhunduqpmrvem';
$password = 'fec1aac5578836fbfaf6dfe68d68adf3a039f7b75d5d58125ec61f05e2948d9e';

// connect to the db
try {
 $con = new PDO($dsn, $user, $password);
}catch (PDOException $e) {
 　printf("DatabaseError: %s ", $e->getMessage());
}

 
?> 