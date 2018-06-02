<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_conn.php");
$email = $_POST['email'];
$username = $_POST['name'];
$password = $_POST['password'];

//搜尋資料庫資料
$sql = "SELECT * FROM users where email = '$email'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($row['id'] != null && $row['email'] == $email && $row['name'] == $username && $row['password']==$password)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['auth'] = $row['auth'];
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}
?>