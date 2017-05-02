<?php
require_once("session.php");
if(isset($_SESSION['block'])){
	 header("location: http://toteamcfs.000webhostapp.com/toteamcfs/block.php");
}
else{
	if (isset($_SESSION['login'])) {
	header("location: http://toteamcfs.000webhostapp.com/toteamcfs");
									}
	if (!isset($_SESSION['login'])) {
	header("location: http://toteamcfs.000webhostapp.com/fblogin");
}
}
?>