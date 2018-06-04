<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_conn.php");

$username = $_POST['name'];
$email = $_POST['email'];
$pw = $_POST['password'];
$pw2 = $_POST['password2'];
$auth = 1;

if($username != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        $sql = "insert into users (name, password, email, auth) values ('$username', '$pw', '$email', '$auth')";
        if($con->exec($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>


