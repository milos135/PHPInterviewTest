<?php
include 'dbhh.php';

$uname=$_POST['uname'];

$sql = "SELECT * FROM register WHERE name = '".$uname."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Ime korisnika: " . $row["name"]. " sa email adresom: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
     

?>