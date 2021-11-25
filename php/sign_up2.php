<?php
echo "hai";
$localhost = "localhost";
$username = "root";
$password = "";
$database = "chatbox";

$conn = mysqli_connect('localhost','root','','chatbox');

if($conn){
    echo "connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($conn,'chatbox');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$roll = $_POST['roll'];

// $query = "INSERT INTO 'tbl_chat'('name','phone','email','username','password','roll') VALUES('$name','$phone','$email','$username','$password','$roll')";
$query = "INSERT INTO `signup`(`name`, `phone`, `email`, `username`, `password`, `roll`,'countrycode') VALUES ('$name','$phone','$email','$username','$password','$roll')";

mysqli_query($conn,$query);
header('location:/');
?>