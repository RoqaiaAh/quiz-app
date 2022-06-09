<?php 
 include("connection.php");
$name = $_POST['username'];
$email = $_POST['newemail'];
$password = $_POST['newpassword'];
$phone = $_POST['phone'];
$sql = "INSERT INTO users  VALUES ('$name','$email','$password','$phone')";
if(mysqli_query($db, $sql)){
    header("location: login.php?n=1");
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($db);
}
  
// Close connection
mysqli_close($db);
?>