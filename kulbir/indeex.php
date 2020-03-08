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
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$father = mysqli_real_escape_string($link, $_REQUEST['father']);
$mother = mysqli_real_escape_string($link, $_REQUEST['mother']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$adhar = mysqli_real_escape_string($link, $_REQUEST['adhar']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);


 
// Attempt insert query execution
$sql = "INSERT INTO register (firstname,lastname,email,mobile,father,mother,gender,dob,age,adhar,password) VALUES ('$firstname','$lastname','$email','$mobile','$father','$mother','$gender','$dob','$age','$adhar','$password')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>