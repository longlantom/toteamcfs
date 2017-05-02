<html>
	<head>
		<title>Tộ Team Confession :xx</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/style.css">
	</head>
<?php
require_once("../session.php");
if(isset($_SESSION['block'])){
	 header("location: http://toteamcfs.000webhostapp.com/toteamcfs/block.php");
}
else{
{
		require_once("../connection.php");

$text=$_POST['cfs'];
$checkcfstt = "SELECT * FROM `cfspending` WHERE `cfs` = '$text'";
               $conncheck = mysqli_query($conn, $checkcfstt);
               $num_rows = mysqli_num_rows($conncheck);
               if ($num_rows!=0) {
                    header('location: index.php');
               }
	else{
		require_once("../session.php");
		$name=$_SESSION['name'];
$idu=$_SESSION['id'];
	$sqlupload="INSERT INTO `cfspending` (`cfs`, `name`, `iduser`,`tinhtrang`) VALUES ('$text', '$name', '$idu ', 'ok')";
   $connection = mysqli_query($conn, $sqlupload);
	echo '<div class="colorbanner banner"></div>
			<form class="form">
				<div class="title">Tộ Team Confession :xx</div>
				<br>
				<div class="text">Cảm ơn tình yêu nhé :3 <br>
				Lời chia sẻ của bạn sẽ được post lên sớm nhất nhé :3
			</div>
			</form>';
		}
	if(!isset($_SESSION['login'])){
header("location: http://toteamcfs.000webhostapp.com/fblogin");
}}}
?>
		</body>
		</html>