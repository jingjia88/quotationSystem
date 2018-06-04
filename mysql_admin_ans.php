<?php session_start(); ?>
<?php
include("mysql_conn.php");
echo '<div style="text-align:right;"><a href="logout.php">登出</a></div>';

$client_id = $_POST['client_id'];
$comment = $_POST['comment'];
$user_id = $_SESSION['user_id'];

if($client_id != null && $comment != null && $user_id != null)
{
        $sql = "insert into admins (client_id, user_id, comment) values ('$client_id', '$user_id', '$comment')";
        if($con->exec($sql))
        {
                echo '回覆成功!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=admin_quo.php>';
        }
        else
        {
                echo '回覆失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=admin_quo.php>';
        }
}
else
{
        echo '輸入錯誤';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=quo.php>';
}
?>