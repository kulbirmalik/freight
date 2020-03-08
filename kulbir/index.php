<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "form");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
 
// Attempt insert query execution
$sql = "INSERT INTO start (firstname,password) VALUES ('$firstname','$password')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>