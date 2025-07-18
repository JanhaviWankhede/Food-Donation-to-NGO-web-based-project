 


<?php
include'datasource.php';
if(isset($_POST['hotel_uname']))
{
 
    $hotel_uname=$_POST['hotel_uname'];
    $hotel_upassword=$_POST['hotel_upassword'];
   
   
 //   $sql="select hotel_uname and hotel_upassword from hotel_registration";
        $sql="select * from hotel_registration where hotel_uname='$hotel_uname' and hotel_upassword='$hotel_upassword' ";

    
    $result=$attendance->query($sql); 
    if($result->num_rows>0){
        
        
         $sql="select * from hotel_registration where hotel_uname='$hotel_uname' and hotel_upassword='$hotel_upassword' and hotel_status='pending'";

    
    $result=$attendance->query($sql); 
    if($result->num_rows>0){
        echo "login Pending";
    } else {
//        echo "login Succsess";
  header("Location:hoteldashboard/ngodash-html_1/add_details.php");
    }
//        echo "login successfully";
    } else {
        echo "login not successful";

    }
}      
?>
 <html>
    <head><h2> Hotel login Form</h2> </head>
    <title><h2>  Hotel login Form</h2> </title>
    <body>
    <center>
        <form action="" method="post">
            <input type="text"placeholder="Enter user name "name="hotel_uname"required=""><br><br>
            <input type="text"placeholder="Enter user password "name="hotel_upassword"required=""><br><br>
            <input type="submit" value="hotel_login">
            
        </form>
    </center>
        
    </body>
    </html>





