<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT fromm,too,truck,tnum,bdate FROM book";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Booking: ". $row["fromm"]. "   " . $row["too"] "  " .$row["truck"] "  " .$row["tnum"]"   " .$row["bdate"] "    " "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>