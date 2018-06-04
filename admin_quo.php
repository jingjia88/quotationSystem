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
$result = $con->query($sql)->fetchAll();
$result_ans = $con->query($sql_ans)->fetchAll();
?>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"> </script>
</head>
<body>
	<div style="padding: 0px 10px;">
		<h1>報價系統</h1>
		<ul class="nav nav-tabs" style="padding: 10px 10px;">
	        <li><a href="admin_pro.php">產品</a></li>
	        <li class="active"><a href="admin_quo.php">詢價</a></li>
	    </ul>
	</div>
    <div class="content" style="padding: 10px;">
		<?php 
		
		for($i=0;$i<count($result);$i++){
			echo "<li>商品：".$result[$i]['product']."數量：".$result[$i]['amount']."<br>&nbsp&nbsp&nbsp&nbsp&nbsp其他：".$result[$i]['comment']."</li>";
			for($j=0;$j<count($result_ans);$j++){
				if($result_ans[$j]['client_id']==$result[$i]['id']){
					echo "<div style='padding: 10px;'>回覆：".$result_ans[$j]['comment']."</div>";
				}
			}
			echo '<a href="admin_ans.php?client='.$res['id'].'">回覆</a>';
			echo "<hr>";
		}
		
		?>
    </div>
    
</body>
