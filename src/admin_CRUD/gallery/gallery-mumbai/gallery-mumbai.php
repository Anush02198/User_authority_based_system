<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:../index.php');
}
//Restrict User or admin to Access moderator.php page
if($_SESSION['user']['role'] !='sadmin' && $_SESSION['user']['role']!='admin_mum'){
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
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "../images/".basename($image);
  	 $sql = "INSERT INTO `images` (images, uploaded_by,division)VALUES ('$image','admin_mum','mumbai');";
     mysqli_query($db, $sql);
                }

  $result = mysqli_query($db, "SELECT * FROM `images` where uploaded_by = 'admin_mum'");
?>
<!DOCTYPE html>
<html>
<head>

<title>Image Upload</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div id="header"></div>
    <div class="buttons" style="margin: 20px; padding-bottom : 40px;">
<a href="../../../admin/admin_mum.php" class="btn btn-success" role="button" style="float : left"><i class="fa fa-arrow-left"></i> Dashboard</a>
<a href="../../../admin/logout.php" class="btn btn-danger" role="button" style="float : right; margin-left : 20px;">Logout  <i class="fa fa-arrow-right"></i></a>
   <a href="add.php" class="btn btn-success" role="button" style=" float : right;"><i class="fa fa-plus"></i> Add image</a>
    </div>
    <table class="table table-striped">
		<thead>
			 <tr>
				<th scope="col" width="30%">id </th>
				<th scope="col" width="40%"> image </th>
				<th scope="col" width="20%" colspan="2">Delete</th>
			  </tr>
		</thead>
		<tbody>		
			<?php
				if ($result->num_rows > 0) {		
					while($row = mysqli_fetch_array($result)) {
			?>
			<tr class="table-row" id="row-<?php echo $row["id"]; ?>"> 
				<td class="table-row"><?php echo $row["id"]; ?></td>
				<td class="table-row"><?php echo "<img src='../images/".$row['images']."'width='250px;' height='300px;' >"; ?></td>
				<!-- action -->
				<td class="table-row" colspan="2"><a href="delete.php?id=<?php echo $row["id"]; ?>" class="link"><img name="delete" id="delete" title="Delete" onclick="return confirm('Are you sure you want to delete?')" src="../icon/delete.png"/></a></td>
			</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
</body>
</html>