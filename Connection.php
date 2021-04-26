<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "login";  
       
    $con=mysqli_connect('localhost','root','');
    if(!$con || !mysqli_select_db($con,'login'))
    {
      echo "not connected";
     }
?>
