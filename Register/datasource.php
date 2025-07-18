<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername="localhost";
$username="root";
$password="";
$DBname="food_supply";
$attendance=new mysqli($servername,$username,$password,$DBname);

if(!$attendance)
{
    trigger_error("Not connected", mysqli_connect_error());
}
 else
     {
//     echo"Connected";
    
}
?>



