<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or admin to Access moderator.php page
if($_SESSION['user']['role'] !='sadmin' && $_SESSION['user']['role']!='admin_bsl'){
 //header('location:admin_pun.php');
    echo"YOU DO NOT HAVE PEMISSION.";
    exit;
}
?>
 <?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "organisation");

  // Initialize message variable
  $msg = "";
  $role = $_SESSION['user']['role'];
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
      echo "$image ";
  	$target = "images/".basename($image);
echo "$target";
  	$sql = "INSERT INTO images (images, uploaded_by)VALUES ('$image','admin_bsl');";
  	// execute query
  	mysqli_query($db, $sql);
  }
  $result = mysqli_query($db, "SELECT * FROM images WHERE uploaded_by = 'admin_bsl'");
?>
<!DOCTYPE html>
<html>
<head>

<title>Image Upload</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 250px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: right;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
#header {
    background:url(Capture.png) center no-repeat;
    height: 212px;
    height: 97px;
    padding: 5px 0 0 0px;
    text-align: right;
    color: #fff;
    font-size: 10px;
}
</style>
</head>
<body>
<div id="header">
   
  </div><br><div id="content"><br>
            <tbody>		
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<b>" .$row['id']."</b>";
      	echo "<img src='images/".$row['images']."' >";
      echo "</div>";
    }
  ?>
</tbody>
</div>
<div class="upload">
   <h1>UPLOAD IMAGE:</h1>
    <form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
    <input type="file" name="image">
    </div>
    <div>
    </div>
    <div>
    <button type="submit" name="upload">UPLOAD</button>
    </div>
    </form>
</div>
<div class="delete">
   <h1>DELETE IMAGE:</h1>
    <form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
enter id of the photo to be deleted: <input type="text" name="id" value="">
  <br><br>
   </div>
    <div>
    </div>
    <div>
    <button type="submit" name="delete">DELETE</button>
    </div>
    </form>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "organisation");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['delete'])) {
      $id=$_POST['id'];
  	$sql = "DELETE FROM images WHERE id= '$id';";
  	// execute query
  	mysqli_query($db, $sql);
   echo "<meta http-equiv='refresh' content='0'>";

  }
    
    ?>
</div>
</body>
</html>