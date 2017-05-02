<html>
	<head>
		<title>Tộ Team Confession :xx</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body class="body">
<?php
require_once("../session.php");
if(isset($_SESSION['block'])){
	 header("location: http://toteamcfs.000webhostapp.com/toteamcfs/block.php");
}
else
{
if (isset($_SESSION['login'])){
	echo $_SESSION['id'];
	echo '<div class="colorbanner banner"></div>
			<form method="POST" action="done.php" class="form">
				<div class="title">Tộ Team Confession :xx</div>
				<br>
				<div class="text">Nơi thổ lộ những thầm kín trong lòng :3 <br>
Hãy nói ra để đc mọi người chia sẻ cùng &lt;3 </div>
				<br>
				<b>Viết lời từ sâu thẩm trái tim nào các cậu &lt;3</b>
				<br>
				<br>
				<div class="textbox">
   					 <input type="text" name="cfs" required="" id="cfs"><span class="highlight"></span><span class="bar"></span>
    				<label>Confession của bạn :D</label>
  				</div>
  				<button type="submit" id="submit" name="submit" class="button buttonBlue" onclick="">Gửi
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
			</form>';
}
if (!isset($_SESSION['login'])) {
	header("location: http://toteamcfs.000webhostapp.com/fblogin");
}}
?>

			
	</body>
</html>