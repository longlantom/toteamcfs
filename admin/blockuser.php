<?php
$text=$_POST['cfs1'];
	require_once("../connection.php");
	require_once("../session.php");
	$sqldel="UPDATE `cfspending` SET `tinhtrang` = 'delete' WHERE `cfs` = '$text'";
	$sqldelquery= mysqli_query($conn, $sqldel);
	$name=$_SESSION['name'];
$idu=$_SESSION['id'];
$sqlblock="INSERT INTO `block`(`id`, `name`) VALUES ('$idu','$name')";
$sqlblockquery=mysqli_query($conn, $sqlblock);
	header("location: admin.php");
	?>