<?php
session_start();
include '../include/dbcon.php';


$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM `signup` WHERE email = '$email' && password = '$password'";

$result = $con->query($query);

$data = $result ->  fetch_assoc();

$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['username']= $data['username'] ;

    header('location:./Main.php');
}
else{
    header('location:../Index.php');
}
?>