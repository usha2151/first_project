<?php
//connection database
include("connection.php");
session_start();

if(isset($_POST['login'])){

    $query = "SELECT * FROM `user-data` WHERE  `user_name`='".$_POST['user_name']."' AND password='".$_POST['password']."' ";

    $result=mysqli_query($conn, $query) or die(mysqli_error());
    
    $total=mysqli_num_rows($result);
  if($total == 1)
  {
        echo "true";
        
    }
    else{
        echo "false";
      
  }
    
}

?>


