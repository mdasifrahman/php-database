<?php

include 'dbconnection.php';
function register($firstname,$lastname,$gender,$DoB,$religion,$presentaddress,$permanentaddress,$phone,$email,$username,$password)
{
 $conn=connect();
$sql= $conn->prepare("INSERT INTO users(firstname,lastname,gender,DoB,religion,presentaddress,permanentaddress,phone,email,username,password) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$sql-> bind_param("sssssssssss",$firstname,$lastname,$gender,$DoB,$religion,$presentaddress,$permanentaddress,$phone,$email,$username,$password);


$response=$sql->execute();
$conn->close();
return $response;

}



?>