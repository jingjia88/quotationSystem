<?php session_start(); ?>
<?php
include("mysql_conn.php");
echo '<div style="text-align:right;"><a href="logout.php">登出</a></div>';

$name = $_POST['name'];
$file = fopen($_FILES["img"]["tmp_name"], "rb");

$fileContents = fread($file, filesize($_FILES["img"]["tmp_name"])); 
fclose($file);
$base64 = base64_encode($fileContents);



if($name != null )
{
        $sql = "insert into products (name, img) values ('$name', '$base64')";
        if($con->exec($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=admin_pro.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=admin_pro.php>';
        }
}
else
{
        echo '輸入錯誤';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=admin_pro.php>';
}
?>
