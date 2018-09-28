<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or admin to Access moderator.php page
if($_SESSION['user']['role'] !='sadmin'){
 //header('location:admin_pun.php');
    echo"YOU DO NOT HAVE PEMISSION.";
    exit;
}
    $conn = mysqli_connect("localhost", "root", "", "organisation");	
	$sql = $conn->prepare("DELETE  FROM `about-us` WHERE id=?");  
	$sql->bind_param("i", $_GET["id"]);
	$sql->execute();
	$sql->close(); 
	$conn->close();
	header('location:about-sadmin.php');		
?>