<?php session_start(); ?>
<?php
include("mysql_conn.php");
echo '<div style="text-align:right;"><a href="logout.php">登出</a></div>';
if($_SESSION== null)
{
    echo '請先登入!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';  
}
//將資料庫裡的所有會員資料顯示在畫面上
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
	        <li class="active"><a href="">產品</a></li>
	        <li><a href="quotations.php">詢價追蹤</a></li>
	    </ul>
	</div>
    <div class="content" >
        <table border="3" align="center">
        <?php foreach($result as $result): ?>
        　<tr>
            <td width="250px"><?php echo '&nbsp&nbsp<img src="data:image;base64,' . $result['img'] . '" style="max-height:90px;">'; ?></td>
            <td width="700px"><?php echo $result['name']; ?></td>
            <td width="100px"><a href="<?php echo "quo.php?product=".$result['name']."&product_id=".$result['id'];?>">我要詢價</a></td>
        　</tr>
        <?php endforeach; ?>
        </table>
    </div>
</body>


