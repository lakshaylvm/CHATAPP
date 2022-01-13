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
    $user= $data['username'] ;

    header('location:./Main.php?user='.$user);
}
else{
    header('location:../Index.php');
}
?>

<script>
var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};
</script>