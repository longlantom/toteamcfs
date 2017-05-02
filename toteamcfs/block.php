<?php
if (isset($_SESSION['login'])) {
	header("location: http://toteamcfs.000webhostapp.com/toteamcfs/");
}
if(isset($_SESSION['block'])){
	 header("location: http://toteamcfs.000webhostapp.comtoteamcfs/block.php");
}
else
header("location: http://toteamcfs.000webhostapp.com/fblogin");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tộ Team Confession :xx</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="body">
			<div class="colorbanner banner"></div>
			<form>
				<div class="title">Tộ Team Confession :xx</div>
				<br>
				<div class="text">Tài khoản của bạn đã bị chặn quyền up confession. Xin vui lòng inbox với page để cấp quyền up :) </div>
			</form>
		</body>
		</html>