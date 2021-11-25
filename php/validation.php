<?php

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

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `tbl_chat` WHERE email = '$email' && password = '$password'";
$result = mysqli_query($conn,$query);

$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['email']='$email';

    header('location:/php/Main.php');
}
else{
    header('location:/');
}
?>