<?php
error_reporting(0);
include'datasource.php';
if(isset($_POST['hotel_name']))
{
    
//    echo $_POST['hotel_uname'];
     $hotel_uname=$_POST['hotel_uname'];
    $hotel_upassword=$_POST['hotel_upassword'];
    $hotel_name=$_POST['hotel_name'];
    $hotel_address=$_POST['hotel_address'];
    $hotel_mobile=$_POST['hotel_mobile'];
    $hotel_owner=$_POST['hotel_owner'];
    $hotel_email=$_POST['hotel_email'];
    $hotel_info=$_POST['hotel_info'];
    $hotel_fssai=$_POST['hotel_fssai'];
    $hotel_foodtype=$_POST['hotel_foodtype'];
//    $hotel_status=$_POST['hotel_status'];
   
    $sqlselect="SELECT * FROM `hotel_registration` WHERE `hotel_uname`='$hotel_uname' or  `hotel_mobile`='$hotel_mobile'";
    
    $result=$attendance->query($sqlselect);
    if($result->num_rows>0){
        echo "User name or Mobile Number Already Exist..";
    } else {
                
        
    $sql="insert into hotel_registration values(null,'$hotel_name','$hotel_address','$hotel_mobile','$hotel_owner','$hotel_email','$hotel_info','$hotel_fssai','$hotel_foodtype','pending','$hotel_uname','$hotel_upassword')";
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
    <title>Sign Up Form Hotel</title>

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
                    <img src="images/My project (1).jpg"
                         width="100%" height="100vh">
                    <div class="signup-img-content">
<!--                        <h2>Register now </h2>
                        <p>while seats are available !</p>-->
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Hotel Username</label>
                                    <input type="text" name="hotel_uname" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Password</label>
                                    <input type="password" name="hotel_upassword" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Hotel name</label>
                                    <input type="text" name="hotel_name" id="company" />
                                </div>
                               
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="hotel_email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="hotel_mobile" id="phone_number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="hotel_foodtype">hotel foodtype</label>
<!--                                        <a href="#" class="form-link">Lunch detail</a>-->
                                    </div>
                                    <div class="select-list">
                                        <select type="text" name="hotel_foodtype" id="meal_preference">
                                            <option value="Veg" name="hotel_foodtype">Select</option>
                                             <option value="Veg" name="hotel_foodtype">Veg</option>
                                            <option value="Non-veg" name="hotel_foodtype">Non-veg</option>
                                            <option value="Both" name="hotel_foodtype">Both</option>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class="form-input">
                                    <label for="company" class="required">Hotel address</label>
                                     <textarea name="hotel_address" id="company"></textarea><br>
                                </div>
                                 <div class="form-input">
                                    <label for="company" class="required">Hotel owner</label>
                                    <input type="" name="hotel_owner"id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Hotel Fssai</label>
                                    <input type="file" name="hotel_fssai"id="company" />
                        
                                </div>
                                
                                 <div class="form-input">
                                    <label for="company" class="required">Hotel information</label>
                                     <textarea name="hotel_info" id="company"></textarea><br>
                                </div>
                                <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="hotel_registration" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                                 </div>
                            
                            
                            
                            
                            
<!--                                 <div class="form-input">
                                    <label for="company" class="required">Hotel Fssai</label>
                                    <input type="file" name="hotel_fssai"id="company" />
                        
                                </div>-->
                            
                            
                                  
<!--                                <div class="form-radio">-->
<!--                                    <div class="label-flex">
                                        <label for="payment">Payment Mode</label>
                                        <a href="#" class="form-link">Payment Detail</a>
                                    </div>-->
<!--                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" checked>
                                            <label for="cash">Cash</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque">
                                            <label for="cheque">Cheque</label>
                                            <span class="check"></span>
                                        </div>-->
<!--                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand">
                                            <label for="demand">Demand Draf</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>-->
<!--                                <div class="form-input">
                                    <label for="chequeno">DD / Cheque No.</label>
                                    <input type="text" name="chequeno" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Drawn on ( Bank Name)</label>
                                    <input type="text" name="blank_name" id="blank_name" />
                                </div>-->
<!--                                <div class="form-input">
                                    <label for="payable">Payable at</label>
                                    <input type="text" name="payable" id="payable" />
                                </div>-->
<!--                            </div>
                        </div>-->
<!--                        <div class="donate-us">
                            <label>Donate us</label>
                            <div class="price_slider ui-slider ui-slider-horizontal">
                                <div id="slider-margin"></div>
                                <span class="donate-value" id="value-lower"></span>
                            </div>
                        </div>-->
<!--                        <div class="form-submit">
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