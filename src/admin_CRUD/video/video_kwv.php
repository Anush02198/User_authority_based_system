<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or admin to Access moderator.php page
if($_SESSION['user']['role'] !='sadmin' && $_SESSION['user']['role']!='admin_kwv'){
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
$sql = "SELECT * FROM video WHERE uploaded_by='admin_kwv'";
$result = $conn->query($sql);	
$conn->close();
//include auth.php file on all secure pages

?>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">	  
	  html {
    display: table;
    margin: auto;
}

body {
    display: table-cell;
    vertical-align: middle;
}
    .logoutx{
    float: right;
     padding: 10px 25px 8px;
     color: #fff;
     background-color: #0067ab;
     text-shadow: rgba(0,0,0,0.24) 0 1px 0;
     font-size: 16px;
     box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
     border: 1px solid #0164a5;
     border-radius: 2px;
     margin-top: 10px;
     cursor:pointer;
}
.logoutx:hover {
     background-color: #024978;
}
.logoutx a{
    color: white;
}
</style>
	<title>Videos</title>
</head>
<body>
<div class="logoutx">
<a href="../../admin/logout.php">Logout</a>
</div>
    <center><div><img src="http://10.31.3.3/Nimg/ITHeader2.png" style="vertical-align: top;"></div></center>
	<div class="button_link"><a href="add/add_kwv.php">Add New</a></div>
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
				<td class="table-row" colspan="2"><a href="edit/edit_kwv.php?id=<?php echo $row["id"]; ?>" class="link"><img title="Edit" src="icon/edit.png"/></a> <a href="delete/delete_kwv.php?id=<?php echo $row["id"]; ?>" class="link"><img name="delete" id="delete" title="Delete" onclick="return confirm('Are you sure you want to delete?')" src="icon/delete.png"/></a></td>
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