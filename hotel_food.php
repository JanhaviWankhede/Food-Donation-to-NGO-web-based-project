 


<?php
include'datasource.php';
if(isset($_POST['food_name']))
{
    $food_name=$_POST['food_name'];
    $food_prepdate=$_POST['food_prepdate'];
    $food_quantity=$_POST['food_quantity'];
    $food_type=$_POST['food_type'];
//    $food_status=$_POST['food_status'];
   // $food=$_POST['hotel_id'];
   
    $sql="insert into hotel_food values(null,'$food_name','$food_prepdate','$food_quantity','$food_type','pending','2','3')";
    echo $sql;
    $attendance->query($sql);
}      
?>
 <html>
    <head><h2> Hotel Food Form</h2> </head>
    <title><h2>  Hotel Food Form</h2> </title>
    <body>
    <center>
        <form action="" method="post">
            <input type="text"placeholder="Enter food name"name="food_name"required=""><br>
            <input type="date"placeholder="Enter food preparation date "name="food_prepdate"required=""><br>
            <input type="text"placeholder="Enter food quantity "name="food_quantity"required=""><br>
<!--            <input type="text"placeholder="Enter food type "name="food_type"required=""><br>-->
            <select name="food_type">
                <option value="Veg">Veg</option>
                   <option value="Non-veg">Non-veg</option>
                   <option value="Both">Both</option>
                
            </select><br>
<!--            <input type="text"placeholder="Approved/Denied"name="food_status"required=""><br>-->
            <input type="submit" value="hotel">
            
        </form>
    </center>
        
    </body>
    </html>



