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
?>
<?php 
$db = mysqli_connect("localhost", "root", "", "organisation");
$sql = "SELECT * FROM `contact-us` WHERE uploaded_by = 'sadmin'";
$result = $db->query($sql);	
$db->close();
?>
<html>
<head>
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
	<title>Employee</title>
</head>
<body>
    <center><div><img src="http://10.31.3.3/Nimg/ITHeader2.png" style="vertical-align: top;"></div></center>
<div class="buttons" style="margin: 20px; padding-bottom : 50px;">
<a href="http://localhost:8012/multi_login3/src/admin/sadmin-hq.php" class="btn btn-success" role="button" style="float : left"><i class="fa fa-arrow-left"></i> Dashboard</a>
<a href="../../../admin/logout.php" class="btn btn-danger" role="button" style="float : right">Logout  <i class="fa fa-arrow-right"></i></a>
</div>
    <table class="table table-striped">
		<thead>
			 <tr>
				<th scope="col"width="20%" > name </th>
				<th scope="col"width="20%"> address </th>
				<th scope="col"width="20%"> phone-number-1 </th>
				<th scope="col"width="20%"> phone-number-2 </th>
				<th scope="col"width="20%"> email </th>
				<th scope="col" width="20%" colspan="2">Edit</th>
			  </tr>
		</thead>
		<tbody>		
			<?php
				if ($result->num_rows > 0) {		
					while($row = $result->fetch_assoc()) {
			?>
			<tr class="table-row" id="row-<?php echo $row["id"]; ?>"> 
				<td class="table-row"><?php echo $row["name"]; ?></td>
				<td class="table-row"><?php echo $row["address"]; ?></td>
				<td class="table-row"><?php echo $row["phno-1"]; ?></td>
				<td class="table-row"><?php echo $row["phno-2"]; ?></td>
				<td class="table-row"><?php echo $row["email"]; ?></td>
				<!-- action -->
				<td class="table-row" colspan="2"><a href="edit.php?id=<?php echo $row["id"]; ?>" class="link"><img title="Edit" src="../icon/edit.png"/></a></td>
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