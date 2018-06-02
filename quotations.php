<?php session_start(); ?>
<?php
include("mysql_conn.php");
echo '<div style="text-align:right;"><a href="logout.php">登出</a></div>';
if($_SESSION== null)
{
    echo '請先登入!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';  
}
$id=$_SESSION['user_id'];
$sql = "SELECT * FROM clients where user_id =$id ORDER BY id DESC";
$sql_ans = "SELECT * FROM admins ORDER BY id DESC";
$result = mysqli_query($con,$sql);
$result_ans = mysqli_query($con,$sql_ans);
?>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<div style="padding: 10px;">
		<h1>報價系統</h1>
		<ul class="nav nav-tabs">
	        <li><a href="product.php">產品</a></li>
	        <li class="active"><a href="quotations.php">詢價追蹤</a></li>
	    </ul>
	</div>
	<div class="content" style="padding: 10px;">
		<?php 
		foreach($result as $res){
			echo "<li>商品：".$res['product']."&nbsp數量：".$res['amount']."<br>&nbsp&nbsp&nbsp&nbsp&nbsp其他：".$res['comment']."</li>";
			foreach($result_ans as $re){
				if($re['client_id']==$res['id']){
					echo "<div style='padding: 10px;'>回覆：".$re['comment']."</div>";
				}
				echo "<hr>";
			}
			echo "<hr>";
		}
		?>
    </div>
</body>