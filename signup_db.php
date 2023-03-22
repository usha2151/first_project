<?php  
 include("connection.php");
if (isset($_POST['user_name']) && isset($_POST['password'])){
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_psw'];
   if($password != $cpassword){
         echo "passwords doesn't match";
    }
    else{
          $query = "INSERT INTO `user-data`(`user_name`, `password`) VALUES ('$username','$password')";
          $result = mysqli_query($conn,$query);
          if($result){
             header("location: images_post.php");
          }
    }
   } 

?>