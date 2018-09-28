<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or admin to Access moderator.php page
if($_SESSION['user']['role'] !='sadmin' && $_SESSION['user']['role']!='admin_nkrd'){
 //header('location:admin_pun.php');
    echo"YOU DO NOT HAVE PEMISSION.";
    exit;
}
    $conn = mysqli_connect("localhost", "root", "", "organisation");
	if (isset($_POST['submit'])) {		
		$sql = $conn->prepare("UPDATE `contact-us` SET `name`=?,`address`=?,`phno-1`=?,`phno-2`=?, `email`=? WHERE id=?");
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phno1 = $_POST['phno-1'];
		$phno2 = $_POST['phno-2'];
		$email = $_POST['email'];
		$sql->bind_param("sssssi",$name,$address,$phno1,$phno2,$email,$_GET["id"]);	
		if($sql->execute()) {
			$success_message = "Edited Successfully";
		} else {
			$error_message = "Problem in Editing Record";
		}

	}
	$sql = $conn->prepare("SELECT * FROM `contact-us` WHERE id=?");
	$sql->bind_param("i",$_GET["id"]);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {		
		$row = $result->fetch_assoc();
	}
	$conn->close();
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<title>employee edit </title>
</head>
<body>
    <center><div><img src="http://10.31.3.3/Nimg/ITHeader2.png" style="vertical-align: top;"></div></center>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<a href="about-admin_nkrd.php" class="btn btn-primary" role="button">Back To List</a>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th colspan="2" class="table-header">Employee Edit</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>name</label></td>
			<td>
			<input type="text" name="name" value="<?php echo $row["name"]?>"><br>
			</td>
		</tr>
        <tr class="table-row">
			<td><label>address</label></td>
			<td>
			<input type="text" name="address" value="<?php echo $row["address"]?>"><br>
			</td>
		</tr>        <tr class="table-row">
			<td><label>phone number 1</label></td>
			<td>
			<input type="text" name="phno-1" value="<?php echo $row["phno-1"]?>"><br>
			</td>
		</tr>        <tr class="table-row">
			<td><label>phone number 2</label></td>
			<td>
			<input type="text" name="phno-2" value="<?php echo $row["phno-2"]?>"><br>
			</td>
		</tr>        <tr class="table-row">
			<td><label>email</label></td>
			<td>
			<input type="text" name="email" value="<?php echo $row["email"]?>"><br>
			</td>
		</tr>
		
		<tr class="table-row">
			<td colspan="2"><input type="submit"  name="submit" value="Submit" class="btn btn-primary"></td>
		</tr>
	</tbody>	
</table>
</form>

<footer><img src="http://10.31.3.3/Nimg/Footer1.png"></footer>
</body>
</html>