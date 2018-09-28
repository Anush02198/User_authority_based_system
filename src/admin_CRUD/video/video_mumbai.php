<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or admin to Access moderator.php page
if($_SESSION['user']['role'] !='sadmin' && $_SESSION['user']['role']!='admin_mum'){
 //header('location:admin_pun.php');
    echo"YOU DO NOT HAVE PEMISSION.";
    exit;
}
?>
<?php 
$conn = mysqli_connect("localhost","root","","organisation");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT * FROM `video` WHERE uploaded_by='admin_mum'";
$result = $conn->query($sql);	
$conn->close();
//include auth.php file on all secure pages

?>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">	  
	  html {
    display: table;
    margin: auto;
}

body {
    display: table-cell;
    vertical-align: middle;
}

</style>
	<title>Videos</title>
</head>
<body>
    <center><div><img src="http://10.31.3.3/Nimg/ITHeader2.png" style="vertical-align: top;"></div></center>
          <div class="buttons" style="margin: 20px; padding-bottom : 50px;">
<a href="../../admin/admin_mum.php" class="btn btn-success" role="button" style="float : left"><i class="fa fa-arrow-left"></i> Dashboard</a>
<a href="../../admin/logout.php" class="btn btn-danger" role="button" style="float : right; margin-left : 20px;">Logout  <i class="fa fa-arrow-right"></i></a>
<a href="add/add_mum.php" class="btn btn-success" role="button" style="float : right;"><i class="fa fa-plus"></i> Add a video</a>
</div>
	<div class="button_link"><a href="add/add_mum.php">Add New</a></div>
    <table class="table table-striped">
		<thead>
			 <tr>
				<th scope="col" width="20%">id</th>
				<th scope="col"> video </th>
				<th scope="col" width="20%" colspan="2">Action</th>
			  </tr>
		</thead>
		<tbody>		
			<?php
				if ($result->num_rows > 0) {		
					while($row = $result->fetch_assoc()){
						?>
					
			<tr class="table-row" id="row-<?php echo $row["id"]; ?>"> 
				<td class="table-row"><?php echo $row["id"]; ?></td>
				<td class="table-row"><?php echo $row["video"]; ?></td>
				<!-- action -->
				<td class="table-row" colspan="2"><a href="edit/edit_mum.php?id=<?php echo $row["id"]; ?>" class="link"><img title="Edit" src="icon/edit.png"/></a> <a href="delete/delete_mum.php?id=<?php echo $row["id"]; ?>" class="link"><img name="delete" id="delete" title="Delete" onclick="return confirm('Are you sure you want to delete?')" src="icon/delete.png"/></a></td>
			</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
	<footer><img src="http://10.31.3.3/Nimg/Footer1.png"></footer>
</body>
</html>