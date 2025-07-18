<?php
session_start();
include'datasource.php';
if(isset($_POST['ngo_uname']))
{
 
    $ngo_uname=$_POST['ngo_uname'];
    $ngo_upasswd=$_POST['ngo_upasswd'];
   
   
 //   $sql="select hotel_uname and hotel_upassword from hotel_registration";
        $sql="select * from ngo_registration where ngo_uname='$ngo_uname' and ngo_upasswd='$ngo_upasswd' ";

    
    $result=$attendance->query($sql); 
    if($result->num_rows>0){
               
         $sql1="select * from ngo_registration where ngo_uname='$ngo_uname' and ngo_upasswd='$ngo_upasswd' and ngo_status='pending'";
    
    $result1=$attendance->query($sql1); 
    
     while($row = mysqli_fetch_assoc($result)){
     $_SESSION['nid']=$row['ngo_id'];
     
     header("Location:hoteldashboard/ngodash-html_1/add_details.php");
     
     }
//    if($result->num_rows>0){
//        
//        
//        echo "login Pending";
//    } else {
//                header("Location:hoteldashboard/ngodash-html_1/add_details.php");
//                echo "login Succsess";
//    }
////        echo "login successfully";
//    } else {
//        echo "login not successful";
//
    }
}      
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Ngo Login</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('images/bg5.jpeg');"></div>
   <!--<div class="bg" style="background-image: url('images/backgroundimg.jpg');"></div>-->
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase"> NGO Login<strong></strong></h3>
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="ngo_uname" placeholder="your-email@gmail.com" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" name="ngo_upasswd" id="password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <span class="ml-auto"><a href="../Food_Supply_Managment_To_NGO/hoteldashboard/hoteldash-html/front.php" class="forgot-pass">Home</a></span>
                    <span class="ml-auto"><a href="Register/ngo_register.php" class="forgot-pass">NGO Register</a></span> 
                  <span class="ml-auto"><a href="hotelLogin.php" class="forgot-pass">Hotel Login</a></span>
                </div>

                <input type="submit" value="Log In" class="btn btn-block py-2 btn-primary">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>