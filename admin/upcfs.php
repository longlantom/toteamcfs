<?php
require_once("../connection.php");
require_once("../session.php");
$text=$_POST['cfs'];
     $checkcfstt = "SELECT * FROM `cfs` WHERE `cfs` = '$text'";
               $conncheck = mysqli_query($conn, $checkcfstt);
               $num_rows = mysqli_num_rows($conncheck);
               if ($num_rows!=0) {
                    header('location: admin.php');
               }
  else{
$sqlid="SELECT MAX(idcfs) FROM `cfs`";
$getid= mysqli_query($conn, $sqlid);
$array = mysqli_fetch_array($getid);
$id=$array[0];
$id++; 

$cfs= '#'.$id.': '.$text;
$name=$_SESSION['name'];
$idu=$_SESSION['id'];

 $url = "https://graph.facebook.com/toteamcfs/feed";
          $msg = $cfs;
          $attachment =  array(
          'access_token' => '',
          'message' => $msg
                              );
                          
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL,$url);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $attachment);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
          $result = curl_exec($ch);
          curl_close ($ch);

          $sqlupdate="UPDATE `cfspending` SET `tinhtrang` = 'done' WHERE `cfs`= '$text'";
          $queryupdate= mysqli_query($conn, $sqlupdate);

         
          $sqlins="INSERT INTO `cfs` (`idcfs`, `cfs`, `nameuser`, `iduser`) VALUES (NULL, '$cfs', '$name', '$idu')";
           $queryupdate= mysqli_query($conn, $sqlins);
           header('location: admin.php');
}
?>