<html><head>
  <meta charset="UTF-8">
  <title>Tộ Team Confession :xx</title>
      <link rel="stylesheet" href="../css/style.css">

  
</head>
<body class="body">
<?php
require_once("../session.php");
if(isset($_SESSION['block'])){
	 header("location: http://toteamcfs.000webhostapp.com/toteamcfs/block.php");

}
else{
	if(isset($_SESSION['login'])){
	 header("location: http://toteamcfs.000webhostapp.com/toteamcfs/");
}

	if(!isset($_SESSION['login'])){
echo '<div class="colorbanner banner"></div>
<form class="form"><div class="title">Tộ Team Confession :xx</div> <div class="text">Vui lòng bấm nút Login Facebook để lấy quyền Up Confession</div>
</div>
<br>
 <a href="https://www.facebook.com/dialog/oauth?client_id=686026124909676
&redirect_uri=http://toteamcfs.000webhostapp.com/fblogin/callback.php&scope=public_profile"><img src="login.png"/></a>

</form>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/index.js"></script>

';}}
?>
</body></html>
