<?php session_start(); ?>
<?php
include("mysql_conn.php");
echo '<div style="text-align:right;"><a href="logout.php">登出</a></div>';
if($_SESSION== null)
{
    echo '請先登入!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';  
}
?>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"> </script>
</head>
<body>
	<div style="padding: 0px 10px;">
		<h1>報價系統</h1>
		<ul class="nav nav-tabs" style="padding: 10px 10px;">
	        <li><a href="">產品</a></li>
	        <li><a href="quotations.php">詢價追蹤</a></li>
	    </ul>
	</div>
    <div class="content" style="padding: 20px 30px;">
    <form action="mysql_admin_ans.php" method="POST" >
        <input type="hidden" name="client_id" value="<?php echo $_GET['client'];?>">
        <div>
            <textarea style="width:300px;height:100px;" name ="comment" placeholder="回覆"></textarea>
        </div><br>
        <button type="submit">送出</button>
 	</form> 
    </div>
</body>