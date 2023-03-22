<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="style.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!---Jquery cdn--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <title>First Project</title>
  </head>
  <body class="bodyf">
        <div class="container-fluid">
           <div class="container" style="margin-top:27px;">
                    <nav class="navbar navbar-expand-lg navbar-light nava">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand coloraa" href="#">Logo</a>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active colora" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active colora" aria-current="page" href="signin.php" >SignIn</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active colora" aria-current="page" href="signup.php">SignUp</a>
                            </li>
                            
                        </ul>
                        </div>
                    </div>
                    </nav>
            </div>
            <div class="container">
            <?php
            include("connection.php");
    $query ="SELECT * FROM `user-data` WHERE `category` = 'commercial'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
       while($row =mysqli_fetch_assoc($result)){
         ?>
                <div class="col-lg-12">
                    <div>
                        <p class="commercialp">Commercial</p>
                    </div>
                    <div class="row g-2 imagerow">
                        <div class="col"><img  class="imagehei" src="<?php echo 'images/'. $row['image'];?>"/>
                        <p class="para">Lorem ipsum dolor sit amet.</p>
                    </div>
                        <div class="col"><img  class="imagehei" src="./images/Rectangle 4.svg"/>
                        <p class="para">Lorem ipsum dolor sit amet.</p>
                    </div>
                        <div class="col"><img  class="imagehei" src="./images/Rectangle 5.svg"/>
                        <p class="para">Lorem ipsum dolor sit amet.</p>
                    </div>
                        <div class="col"><img  class="imagehei" src="./images/Rectangle 6 (2).svg"/>
                        <p class="para">Lorem ipsum dolor sit amet.</p>
                    </div>
                        <div class="col"><img  class="imagehei" src="./images/Rectangle 7.svg"/>
                        <p class="para">Lorem ipsum dolor sit amet.</p>
                    </div>
                    </div>
                </div>
                <?php
       }
    }
    ?>

<?php
include("connection.php");
    $query ="SELECT * FROM user_profile WHERE `category` = 'party'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
       while($row =mysqli_fetch_assoc($result)){
         ?>
                <div class="col-lg-12">
                    <div>
                        <p class="commercialp">Party</p>
                    </div>
                    <div class="row g-2 imagerow">
                        <div class="col"><img  class="imagehei" src="<?php echo 'images/'. $row['image'];?>"/>
                        <p class="para">Lorem ipsum dolor sit amet.</p>
                    </div>
                        <div class="col"><img  class="imagehei" src="./images/Rectangle 9.svg"/>
                        <p class="para">Lorem ipsum dolor sit amet.</p>
                    </div>
                        <div class="col"><img  class="imagehei" src="./images/Rectangle 10.svg"/>
                        <p class="para">Lorem ipsum dolor sit amet.</p>
                    </div>
                        <div class="col"><img  class="imagehei" src="./images/Rectangle 11.svg"/>
                        <p class="para">Lorem ipsum dolor sit amet.</p>
                    </div>
                        <div class="col"><img  class="imagehei" src="./images/Rectangle 12.svg"/>
                        <p class="para">Lorem ipsum dolor sit amet.</p>
                    </div>
                    </div>
                </div>
                
         <?php
       } 
    }
    ?>
            </div>

        </div>

       

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>