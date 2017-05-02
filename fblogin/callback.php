<?php
require_once("../session.php");
    $app_id = "686026124909676";
    $app_secret = "9cf03fbd33cd4dfb34bbe8c7ed818b6c";
    $redirect_uri = urlencode("http://toteamcfs.000webhostapp.com/fblogin/callback.php");    
    
    // Get code value
    $code = $_GET['code'];
    
    // Get access token info
    $facebook_access_token_uri = "https://graph.facebook.com/v2.8/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code";    
    
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
        
    $response = curl_exec($ch); 
    curl_close($ch);

    // Get access token
    $aResponse = json_decode($response);
    $access_token = $aResponse->access_token;
    
    // Get user infomation
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/me?access_token=$access_token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
        
    $response = curl_exec($ch); 
    curl_close($ch);
    
    $user = json_decode($response);

    $_SESSION['user_login'] = true;
    $ten = $user->name;
   
    $id = $user ->id;

    require_once("../connection.php");
    $sqlid="SELECT * FROM `block` WHERE `id` = '$id'";
    $idquery = mysqli_query($sqlid);
    $num_rows = mysqli_num_rows($idquery);
        if ($num_rows==0) {
            $_SESSION['login'] ='5d41402abc4b2a76b9719d911017c592';
            $_SESSION['id'] = $id;
 $_SESSION['name'] = $ten;
                            header("location: http://localhost/toteamcfs/toteamcfs/");
                            
                            }
        if($num_rows!=0) {  $_SESSION['block']='14511f2f5564650d129ca7cabc333278';
        header("location: http://localhost/toteamcfs/toteamcfs/block.php");
    }
    ?>
    