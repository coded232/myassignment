<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "myass");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$entertext = mysqli_real_escape_string($link, $_REQUEST['entertext']);
 
// attempt insert query execution
$sql = "INSERT INTO mytable(first_name,last_name,gender,mytext,password ) VALUES ('$first_name', '$last_name', '$gender','$entertext','$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>