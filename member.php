<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_conn.php");
echo '<a href="logout.php">登出</a>  <br><br>';

if($_SESSION['user_id'] != null)
{
        if($_SESSION['auth']==1){
                echo '<meta http-equiv=REFRESH CONTENT=0;url=product.php>';
        }
        else if($_SESSION['auth']==0){
                echo '<meta http-equiv=REFRESH CONTENT=0;url=admin_pro.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>

