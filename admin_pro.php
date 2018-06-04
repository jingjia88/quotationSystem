<?php session_start(); ?>
<?php
include("mysql_conn.php");
echo '<div style="text-align:right;"><a href="logout.php">登出</a></div>';
if($_SESSION== null)
{
    echo '請先登入!';
    echo '<meta http-equiv=REFRESH CONTENT=;url=login.php>';  
}

$sql = "SELECT * FROM products";
$result = $con->query($sql);
?>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"> </script>
</head>
<body>
	<div style="padding: 0px 10px;">
		<h1>報價系統</h1>
		<ul class="nav nav-tabs" style="padding: 10px 10px;">
	        <li class="active"><a href="admin_pro.php">產品</a></li>
	        <li><a href="admin_quo.php">詢價</a></li>
	    </ul>
	</div>
    <div align="center">
        <form action="mysql_admin_pro.php" method="POST" enctype="multipart/form-data">
            <fieldset style="height:80px;width:700px;">
            <legend>新增產品：</legend>
            <input type="string" name="name" placeholder="產品名稱">
            上傳圖片：<input type="file" name="img" style="display: inline;" accept="image/*">
            <button type="submit">確認新增</button>
            </fieldset>
        </form> 
    </div>
    <div class="content" >
    <h style="font-size:20px; padding: 0px 50px;">產品列表：</h>
        <table border="3" align="center">
        <?php foreach($result as $result): ?>
        　<tr>
            <td width="250px"><?php echo '&nbsp&nbsp<img src="data:image;base64,' . $result['img'] . '" style="max-height:90px;">'; ?></td>
            <td width="700px"><?php echo $result['name']; ?></td>
            <td width="100px"><a href="<?php echo "mysql_admin_del.php?product_id=".$result['id'];?>">下架</a></td>
        　</tr>
        <?php endforeach; ?>
        </table>
    </div>
</body>