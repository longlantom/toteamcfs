
<html>
    <head>
        <title>Admin Tộ Team Confesstion :xx</title>
        <link rel="stylesheet" href="../css/style.css">
       	<link rel="stylesheet" href="../css/button.css">
    </head>
<body class="body">
<div class="colorbanner banner"></div>

<?php
include("../session.php");
if(!isset($_SESSION['username'])){header('location: login.php');}
require_once("../connection.php");
$sqlcount='SELECT COUNT(*) FROM `cfspending` WHERE `tinhtrang` = "ok"';
$sqlcountquery=mysqli_query($conn, $sqlcount);
$fetch=mysqli_fetch_all($sqlcountquery);
$i=1;

	$sqlnoidung="SELECT * FROM `cfspending` WHERE `tinhtrang` = 'ok'"; 
$sqlnoidungquery=mysqli_query($conn,$sqlnoidung);
$sqlnoidungfetch = mysqli_fetch_all($sqlnoidungquery);
if($fetch[0][0] ==0) {echo'<script>alert("Không có Confession mới")</script>';}
else
{
$i=1; $j=0;
while($i<=$fetch[0][0]){
    while($j<=$fetch[0][0]-1){
$text = $sqlnoidungfetch[$j][0];

    echo '<br>
            <div class="card card-5">'.$sqlnoidungfetch[$j][0];
echo '<form method="POST" action="upcfs.php"><input type="hidden" name="cfs" value="'.$text; echo'" size="30"/><button class="btn" type="submit" onclick""><span>Up :D</span></button></form>

            <form method="POST" action="delpost.php"><input type="hidden" name="cfs1" value="'.$text; echo'"><button class="btna" type="submit" onclick=""><span>Xóa :(</span></button></form>

            <form method="POST" action="blockuser.php"><input type="hidden" name="cfs2" value="'.$text; echo'">
            <button class="btnb" type="button"><span>Xóa + Block :((</span></button> 
                 </form></div>';
              
                 $j++;
             }

                $i++;
    }
}

?>
</body>
</html>