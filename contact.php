<?php
include("includes/db.php");

$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (email,message)
VALUES ('$email','$message')";

$conn->query($sql);

echo "<script>
alert('Thank you for contacting us!');
window.location='index.php';
</script>";
?>