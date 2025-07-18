<?php

$uname=$_POST['uname'];
$pass=$_POST['pass'];



if($uname=="Admin" && $pass=="Admin@123"){
    header("Location:hoteldashboard/ngodash-html_1/adminpage.php");
} else {
       echo "wrong..";
}