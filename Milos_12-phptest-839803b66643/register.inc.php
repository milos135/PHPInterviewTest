<?php
include 'dbhh.php';

$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$sql="insert into register(name,email,password)
values ('$uname','$email','$pass')";
    
   

if($pass==$cpass){
    $result=mysqli_query($conn,$sql); 
}
else{
    die("REGISTER ERROR");
}

header("Location:index.php");

?>