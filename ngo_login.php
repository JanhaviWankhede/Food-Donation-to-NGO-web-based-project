 


<?php
include'datasource.php';
if(isset($_POST['ngo_uname']))
{
 
    $ngo_uname=$_POST['ngo_uname'];
    $ngo_upasswd=$_POST['ngo_upasswd'];
   
   
 //   $sql="select hotel_uname and hotel_upassword from hotel_registration";
        $sql="select * from ngo_registration where ngo_uname='$ngo_uname' and ngo_upasswd='$ngo_upasswd' ";

    
    $result=$attendance->query($sql); 
    if($result->num_rows>0){
        
        
         $sql="select * from ngo_registration where ngo_uname='$ngo_uname' and ngo_upasswd='$ngo_upasswd' and ngo_status='pending'";

    
    $result=$attendance->query($sql); 
    if($result->num_rows>0){
        echo "login Pending";
    } else {
        echo "login Succsess";

    }
//        echo "login successfully";
    } else {
        echo "login not successful";

    }
}      
?>
 <html>
    <head><h2> NGO login Form</h2> </head>
    <title><h2>  NGO login Form</h2> </title>
    <body>
    <center>
        <form action="" method="post">
            <input type="text"placeholder="Enter user name "name="ngo_uname"required=""><br><br>
            <input type="text"placeholder="Enter user password "name="ngo_upasswd"required=""><br><br>
            <input type="submit" value="ngo_login">
            
        </form>
    </center>
        
    </body>
    </html>






