<?php
include'datasource.php';
if(isset($_POST['ngo_name']))
{
    
//    echo $_POST['ngo_uname'];
    $_POST['ngo_uname'];
    $ngo_uname=$_POST['ngo_uname'];
    $ngo_upasswd=$_POST['ngo_upasswd'];
    $ngo_name=$_POST['ngo_name'];
    $ngo_address=$_POST['ngo_address'];
    $ngo_mobile=$_POST['ngo_mobile'];
    $ngo_owner=$_POST['ngo_owner'];
    $ngo_email=$_POST['ngo_email'];
    $ngo_info=$_POST['ngo_info'];
    $ngo_doc=$_POST['ngo_doc'];

//    $hotel_status=$_POST['hotel_status'];
   
    $sqlselect="SELECT * FROM `ngo_registration` WHERE `ngo_uname`='$ngo_uname' or  `ngo_mobile`='$ngo_mobile'";
    
    $result=$attendance->query($sqlselect);
    if($result->num_rows>0){
        echo "User name or Mobile Number Already Exist..";
    } else {
         
    $sql="insert into ngo_registration values(null,'$ngo_name','$ngo_owner','$ngo_address','$ngo_mobile','$ngo_email','$ngo_info','$ngo_doc','pending','$ngo_uname','$ngo_upasswd')";
    echo "Register Successfully..";
    $attendance->query($sql);
    }
   
}      
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form ngo</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/My project (1).jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required"> ngo Username</label>
                                    <input type="text" name="ngo_uname" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Password</label>
                                    <input type="password" name="ngo_upasswd" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">ngo name</label>
                                    <input type="text" name="ngo_name" id="company" />
                                </div>
                               
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="ngo_email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="number" name="ngo_mobile" id="phone_number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="company" class="required">ngo address</label>
                                     <textarea name="ngo_address" id="company"></textarea><br>
                                </div>
                                 <div class="form-input">
                                    <label for="company" class="required">ngo owner</label>
                                    <input type="" name="ngo_owner"id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">ngo doc</label>
                                    <input type="file" name="ngo_doc"id="company" />
                        
                                </div>
                                
                                 <div class="form-input">
                                    <label for="company" class="required">ngo information</label>
                                     <textarea name="ngo_info" id="company"></textarea><br>
                                </div>
                                <div class="form-submit">
                         
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>

                                 </div>
                                    
                                        
                                
                                    </div>
                                </div>
                                
<!--                                 <div class="form-input">
                                    <label for="company" class="required">ngo address</label>
                                     <textarea name="ngo_address" id="company"></textarea><br>
                                </div>
                                 <div class="form-input">
                                    <label for="company" class="required">ngo owner</label>
                                    <input type="" name="ngo_owner"id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">ngo doc</label>
                                    <input type="file" name="ngo_doc"id="company" />
                        
                                </div>
                                
                                 <div class="form-input">
                                    <label for="company" class="required">ngo information</label>
                                     <textarea name="ngo_info" id="company"></textarea><br>
                                </div>

                                 </div>-->
                            
<!--                     <div class="form-submit">
                         
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>-->


                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>