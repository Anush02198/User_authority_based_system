<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or admin to Access moderator.php page
if($_SESSION['user']['role'] !='sadmin' && $_SESSION['user']['role']!='admin_mtn'){
 //header('location:admin_pun.php');
    echo"YOU DO NOT HAVE PEMISSION.";
    exit;
}
  $db = mysqli_connect("localhost", "root", "", "organisation");
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
      $bio = $_POST['bio'];
      $name = $_POST['name'];
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
      echo "$image ";
  	$target = "../images/".basename($image);
echo "$target";
  	 $sql = "INSERT INTO artist_list (name, bio, image, uploaded_by,division)VALUES ('$name','$bio','$image','admin_mtn','matunga');";
     mysqli_query($db, $sql);
                }
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
  <title>Add New Employee</title> 	
</head>
<body>
<div class="upload">
   <h1>UPLOAD IMAGE:</h1>
    <form method="POST" action="artist_list-matunga.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
    <input type="file" class="btn btn-success" style="margin : 20px;" name="image">
    </div>
    <div>
    <p style="margin-left : 20px;">name of the artist:</p><input type="text" name="name" style="margin-left : 20px;"><br><br>
    <p style="margin-left: 20px;">Bio of the artist:</p><textarea rows="4" cols="50" name="bio" style="margin-left : 20px;"></textarea>
    </div>
    <div>
    <button type="submit" name="upload" class="btn btn-success" style="margin : 20px;">UPLOAD</button>
    </div>
    </form>
</div>
<footer><img src="http://10.31.3.3/Nimg/Footer1.png"></footer>
</body>
</html>