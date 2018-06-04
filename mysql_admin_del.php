<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_conn.php");

$product = $_GET['product_id'];

$sql = "delete from products where id=$product";
if($con->exec($sql))
{
        echo '下架成功!';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=admin_pro.php>';
}
else
{
        echo '下架失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=admin_pro.php>';
}
?>