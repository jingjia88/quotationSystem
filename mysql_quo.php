<?php session_start(); ?>
<?php
include("mysql_conn.php");
echo '<div style="text-align:right;"><a href="logout.php">登出</a></div>';

$user_id = $_POST['user_id'];
$product = $_POST['product'];
$amount = $_POST['amount'];
$comment = $_POST['comment'];


if($user_id != null && $product != null && $amount != null)
{
        $sql = "insert into clients (product, amount, user_id, comment) values ('$product', '$amount', '$user_id', '$comment')";
        if($con->exec($sql))
        {
                echo '詢價成功!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=quotations.php>';
        }
        else
        {
                echo '詢價失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=product.php>';
        }
}
else
{
        echo '輸入錯誤';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=quo.php>';
}
?>
