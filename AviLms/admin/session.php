<?php
include("db_conn.php");
session_start();
if(!isset($_SESSION["name"])){
header("Location:../login.php");
exit();
} 

$sess_email = $_SESSION["name"];
$sql = "SELECT user_id,user_name,email FROM users WHERE name = '$sess_email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $userid=$row["user_id"];
    $name = $_SESSION["name"];
    $username = $_SESSION["user_name"];
    
    $useremail=$row["email"];
    
  }
} else {
    $userid="GHX1Y2";
    $username ="Jhon Doe";
    $useremail="mailid@domain.com";
    
}
?>