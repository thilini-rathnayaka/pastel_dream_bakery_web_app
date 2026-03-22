<?php
session_start();
include("../includes/db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if($result->num_rows > 0){

$user = $result->fetch_assoc();

if(password_verify($password, $user['password'])){

$_SESSION['user'] = $user['username'];

header("Location: ../index.php");
exit();

}else{
echo "Wrong password";
}

}else{
echo "User not found";
}

}
?>