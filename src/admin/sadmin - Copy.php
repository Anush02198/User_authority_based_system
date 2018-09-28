<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict admin or Moderator to Access sadmin.php page
if($_SESSION['user']['role']!='sadmin'){
    echo"YOU DO NOT HAVE PERMISSION";
    exit;
}
/*if($_SESSION['user']['role']=='admin_pun'){
 header('location:moderator.php');
}*/
?>
<h1>Wellcome to <?php echo $_SESSION['user']['username'];?> Page</h1>
<link rel="stylesheet" href="style.css" type="text/css"/>
<div id="profile">
<h2>User name is: <?php echo $_SESSION['user']['username'];?> and Your Role is :<?php echo $_SESSION['user']['role'];?></h2>
<div id="logout"><a href="logout.php">Please Click To Logout</a></div>
</div>