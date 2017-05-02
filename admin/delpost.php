<?php
	$text=$_POST['cfs1'];
	print_r($text);
	require_once("../connection.php");
	$sqldel="UPDATE `cfspending` SET `tinhtrang` = 'delete' WHERE `cfs` = '$text'";
	$sqldelquery= mysqli_query($conn, $sqldel);
	header('location: admin.php');
	?>