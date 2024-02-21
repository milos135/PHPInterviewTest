<?php
include 'dbhh.php';

$uname=$_POST['uname'];
$email=$_POST['email'];

$sql = "SELECT * FROM register WHERE name = '".$uname."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Welcome $uname" ;
    
} else {
     echo "ERROR LOGIN YOU IN";
}
?>