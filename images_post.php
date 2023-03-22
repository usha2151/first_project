<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="style2.css" rel="stylesheet">
    
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
                            <a class="nav-link active colora" aria-current="page" href="" >SignIn</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active colora" aria-current="page" href="">SignUp</a>
                            </li>
                            
                        </ul>
                        </div>
                    </div>
                    </nav>
            </div>

             <!--container ofthe upload file-->
    <div class="container bgb" >
      <!--division two column-->
          <form action="upload.php" method="POST" enctype="">
      
               <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 ">
                        <!--upload section-->
                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 tft">
                            
                               
                                <label for="inputTag">
                                    Upload file
                                    <input id="inputTag" name="file" type="file"/>
                                  </label>
                            
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 ">
                        <!---text section-->
                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12  pft ">
                            <textarea name="msg" style="boder:none; background-color: #D9D9D9; " class="pp" value="write image detail"></textarea>
                            
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6  ">
                        <div class="col-sm-12 col-md-6 col-xs-12 col-lg-12 ">
                            <!---selection area-->
                            <select class="form-select sel" name="cat" aria-label="Default select example">
                                <option selected>select category</option>
                                <option value="1">Commercial</option>
                                <option value="2">Party</option>
                                
                              </select>
                        </div>
                    </div>
                    <!--button-->
                    <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6  ">
                        <div class="gh">
                            <button type="button" class="btn btn-danger ">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-success mk" >Add</button>
                        
                        </div>
                    </div>
                </div>
</div>    </form>
           
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