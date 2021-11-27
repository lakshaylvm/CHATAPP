<?php

include '../include/dbcon.php';
/*
if($con){
    echo "connection successful";
}else{
    echo "No connection";
}*/

mysqli_select_db($con,'chatbox');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$roll = $_POST['roll'];

// $query = "INSERT INTO 'tbl_chat'('name','phone','email','username','password','roll') VALUES('$name','$phone','$email','$username','$password','$roll')";
$query = "INSERT INTO `signup` (`name`, `phone`, `email`, `username`, `password`, `rollno`, `countrycode`) VALUES ('$name', '$phone', '$email', '$username', '$password', '$roll', '+91')";

$run = $con->query($query);

if ($run){
    
    echo'<script>    
    alert("Registration Successfully");
    location.replace("../Index.php");
    </script>';    
}
else{

      echo'<script>    
     alert("Already Registered");
     location.replace("../php/Sign_up.php");
     </script>';
}
?>