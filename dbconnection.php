<?php
function connect(){
$conn=new mysqli("localhost","asif","123","wtk");

if($conn-> connect_errno)
{
die("connection failed: ".$conn-> connect_errno); 
}
return $conn;
}

?>