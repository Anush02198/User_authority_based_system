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
}	if (isset($_POST['submit'])) {
        $conn = mysqli_connect("localhost", "root", "", "organisation");
		$sql = $conn->prepare("INSERT INTO `about-us`(`about-us`,`uploaded_by`) VALUES (?,?)");  
		$aboutus = $_POST['about-us'];
        $role = 'sadmin';
		$sql->bind_param("ss", $aboutus, $role); 
		if($sql->execute()) {
			$success_message = "Added Successfully";
		} else {
			$error_message = "Problem in Adding New Record";
		}
		$sql->close();   
		$conn->close();
	} 
?>
<style>
html {
    display: table;
    margin: auto;
}

body {
    display: table-cell;
    vertical-align: middle;
}
</style>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
  <title>Add New Employee</title> 	
</head>
<body>
    <center><div><img src="http://10.31.3.3/Nimg/ITHeader2.png" style="vertical-align: top;"></div></center>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<a href="about-admin_mum.php" class="btn btn-primary" role="button">Back To List</a>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th colspan="2" class="table-header">Add About Us</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>About Us</label></td>
			<td><textarea name="about-us" rows="10" cols="30"></textarea></td>
		</tr>
		<tr class="table-row">
			<td colspan="2"><input type="submit" name="submit" value="Submit" class="btn btn-primary"></td>
		</tr>
		
	</tbody>
</table>
</form>

<footer><img src="http://10.31.3.3/Nimg/Footer1.png"></footer>
</body>
</html>