 


<?php
include'datasource.php';
if(isset($_POST['hotel_name']))
{
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
 <html>
    <head><h2> Hotel Registration Form</h2>
    <title><h2>  Hotel Registration Form</h2> </title>
 </head>
    
    <body>
    <center>
        <form action="" method="post">
            <input type="text"placeholder="Enter Hotel Username"name="hotel_uname"required=""><br>
            <input type="text"placeholder="Enter Hotel password"name="hotel_upassword"required=""><br>
            <input type="text"placeholder="Enter Hotel Name"name="hotel_name"required=""><br>
            <textarea placeholder="Enter Hotel Address"name="hotel_address"required=""></textarea><br>
            <input type="number"placeholder="Enter Hotel Mobile"name="hotel_mobile"required=""><br>
            <input type="text"placeholder="Enter Hotel Owner"name="hotel_owner"required=""><br>
            <input type="email"placeholder="Enter Hotel Email"name="hotel_email"required=""><br>
            <textarea placeholder="Enter Hotel Info"name="hotel_info"required=""></textarea><br>
            <input type="file"placeholder="Enter Hotel Fssai"name="hotel_fssai"required=""><br>
<!--            <input type="text"placeholder="Enter Hotel Foodtype"name="hotel_foodtype"required=""><br>-->
            <select name="hotel_foodtype">
                <option value="V">Veg</option>
                   <option value="N">Non-veg</option>
                   <option value="B">Both</option>
                
            </select><br>
<!--            <input type="text"placeholder="Enter Hotel Status"name="hotel_status"required=""><br>-->
            <input type="submit" value="hotel_registration">
            
            

            
        </form>
    </center>
        
    </body>
    </html>