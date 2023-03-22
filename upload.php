<?php
include("connection.php");
if(isset($_POST['submit'])){
    $cat = $_POST['cat'];
    $name = $_POST['msg'];
    $file = $_FILES['file']['name'];
    $targetDir = "images/";
    $response = "";
    $tmp = $_FILES["file"]["tmp_name"];
    $ext = array('jpeg','jpg');
    $file_trgt = $targetDir . basename($_FILES["file"]["name"]);

    $fileType = pathinfo($file_trgt,PATHINFO_EXTENSION);
    
    // if(!in_array($fileType,$ext)){
    //   $_SESSION['response'] = "upload only jpeg";
        

    // }

    // else{
        if(move_uploaded_file($tmp, "images/".$file)){
            $sql = "INSERT INTO `user-data`(`categories`, `image`, `tittle`) VALUES ('$file','$cat','$name')";
            $res=mysqli_query($conn,$sql);

            $query ="SELECT * FROM `user-data` WHERE `user_name`='".$_POST['user_name']."'";
            $result =mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    header('location:index.php'); 
                }
               
                  
            }
        }
    }
    ?>