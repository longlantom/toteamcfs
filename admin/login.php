<html>
	<head>
		<title>Tộ Team Confession :xx</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body class="body>">
	<?php
 require_once("../connection.php");
 if (isset($_POST["submit"])) {

 $username = $_POST["username"];
 $password = $_POST["password"];
 $username = strip_tags($username);
 $username = addslashes($username);
 $password = strip_tags($password);
 $password = addslashes($password);
 $sql = "select * from `login` where username = '$username' and password = '$password' ";
 $query = mysqli_query($conn,$sql);
 $num_rows = mysqli_num_rows($query);
 if ($num_rows==0) {
echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu')</script>";
 }else{
 	require_once("../session.php");
 $_SESSION['username'] = $username;
                header('Location: admin.php');
 }
 }
?>
<div class="colorbanner banner"></div>
			<form method="POST" action="login.php" class="form">
				<div class="title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tộ Team Confession :xx</div>
				<br>
				<div class="text">Vui lòng đăng nhập để lấy quyền</div>
				<br>
				<br>
				<div class="textbox">
   					 <input type="text" name="username" required="" ><span class="highlight"></span><span class="bar"></span>
    				<label>Username</label>

  				</div>
  					<div class="textbox">
   					 <input type="password" name="password" required="" ><span class="highlight"></span><span class="bar"></span>
    				<label>Password</label>

  				</div>
  				<button type="submit" id="submit" name="submit" class="button buttonBlue" onclick="">Gửi
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
			</form>