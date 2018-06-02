<?php session_start(); ?>
<?php
include("mysql_conn.php");
echo '<div style="text-align:right;"><a href="logout.php">登出</a></div>';
if($_SESSION== null)
{
    echo '請先登入!';
    echo '<meta http-equiv=REFRESH CONTENT=;url=login.php>';  
}

$sql = "SELECT * FROM clients ORDER BY id DESC";
$sql_ans = "SELECT * FROM admins ORDER BY id DESC";
$result = mysqli_query($con,$sql);
$result_ans = mysqli_query($con,$sql_ans);
?>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<div style="padding: 0px 10px;">
		<h1>報價系統</h1>
		<ul class="nav nav-tabs" style="padding: 10px 10px;">
	        <li class="active"><a href="admin_pro.php">產品</a></li>
	        <li><a href="admin_quo.php">詢價</a></li>
	    </ul>
	</div>
    <div class="content" style="padding: 10px;">
		<?php 
		foreach($result as $res){
			echo "<li>商品：".$res['product']."數量：".$res['amount']."<br>&nbsp&nbsp&nbsp&nbsp&nbsp其他：".$res['comment']."</li>";
			foreach($result_ans as $re){
				if($re['client_id']==$res['id']){
					echo "<div style='padding: 10px;'>回覆：".$re['comment']."</div>";
				}
				
            }
            echo '<a href="admin_ans.php?client='.$res['id'].'">回覆</a>';
			echo "<hr>";
		}
		?>
    </div>
    
</body>
