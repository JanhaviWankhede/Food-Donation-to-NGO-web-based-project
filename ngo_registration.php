<?php
include'datasource.php';
if(isset($_POST['ngo_uname']))
{
     $ngo_name=$_POST['ngo_name'];
    $ngo_owner=$_POST['ngo_owner'];
    $ngo_address=$_POST['ngo_address'];
     $ngo_mobile=$_POST['ngo_mobile'];
    $ngo_email=$_POST['ngo_email'];
        $ngo_info=$_POST['ngo_info'];
    $ngo_doc=$_POST['ngo_doc'];
    $ngo_uname=$_POST['ngo_uname'];
    $ngo_upasswd=$_POST['ngo_upasswd'];
   
//    $hotel_status=$_POST['hotel_status'];
   
//    $sqlselect="SELECT * FROM `ngo_registration` WHERE `ngo_uname`='$ngo_uname' or  `ngo_mobile`='$ngo_mobile'";
    
//    if($result->num_rows>0){
//    } else {
  $sql="insert into ngo_registration VALUES (null,'$ngo_name','$ngo_owner','$ngo_address','$ngo_mobile','$ngo_email','$ngo_info','$ngo_doc','pending','$ngo_uname','$ngo_upasswd')";
    echo "Register Successfully";
    $attendance->query($sql);      
    }  
?>
 <html>
    <head><h2> NGO Registration Form</h2>
    <title>  NGO Registration Form </title>
 </head>
    
    <body>
    <center>
        <form action="" method="post">
            <input type="text"placeholder="Enter NGO name"name="ngo_name"required=""><br><br>
            <input type="text"placeholder="Enter NGO owner"name="ngo_owner"required=""><br><br>
            <input type="text"placeholder="Enter NGO address"name="ngo_address"required=""><br><br>
            <input type="number"placeholder="Enter NGO Mob"name="ngo_mobile"required=""><br><br>
            <input type="email"placeholder="Enter NGO email"name="ngo_email"required=""><br><br>
            <input type="text"placeholder="Enter NGO info"name="ngo_info"required=""><br><br>
            <input type="file"placeholder="Enter NGO doc"name="ngo_doc"required=""><br><br>
<!--     <textarea placeholder="Enter NGO status"name="ngo_status"required=""></textarea><br>-->
            <input type="text"placeholder="Enter NGO uname"name="ngo_uname"required=""><br><br>
            <input type="password"placeholder="Enter NGO password"name="ngo_upasswd"required=""><br>

<!--            <input type="text"placeholder="Enter Hotel Foodtype"name="hotel_foodtype"required=""><br>-->
<!--            <select name="ngo_foodtype">
                <option value="V">Veg</option>
                   <option value="N">Non-veg</option>
                   <option value="B">Both</option>-->
                
            </select><br>
<!--            <input type="text"placeholder="Enter Hotel Status"name="hotel_status"required=""><br>-->
            <input type="submit" value="submit">      
        </form>
    </center>    
    </body>
    </html>

