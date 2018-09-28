<?php
	require_once("db.php");
	if (isset($_POST['submit'])) {		
		$sql = $conn->prepare("UPDATE awards_achievements SET year=? , achievements=? WHERE id=?");
		$year=$_POST['year'];
		$achievements = $_POST['achievements'];
		$sql->bind_param("ssi",$year, $achievements,$_GET["id"]);	
		if($sql->execute()) {
			$success_message = "Edited Successfully";
		} else {
			$error_message = "Problem in Editing Record";
		}

	}
	$sql = $conn->prepare("SELECT * FROM awards_achievements WHERE id=?");
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
<link href="style.css" rel="stylesheet" type="text/css" />
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
<div class="button_link"><a href="../achievement_nagpur.php" >Back to List </a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th colspan="2" class="table-header">Achievements Edit</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>year</label></td>
			<td><input type="number" name="year" class="txtField" value="<?php echo $row["year"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>achievements</label></td>
			<td><input type="text" name="achievements" class="txtField" value="<?php echo $row["achievements"]?>"></td>
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