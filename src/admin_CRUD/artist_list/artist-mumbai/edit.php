<!--We cannot set the value of the image. If edit button is pressed, then the image HAS to be uploaded again. https://stackoverflow.com/questions/1696877/how-to-set-a-value-to-a-file-input-in-html -->
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
    $conn = mysqli_connect("localhost", "root", "", "organisation");
	if (isset($_POST['submit'])) {		
		$sql = $conn->prepare("UPDATE `artist_list` SET `name`=?, `bio`=?,`image`=? WHERE id=?");
		$name = $_POST['name'];
		$bio = $_POST['bio'];
		$image = $_FILES['image']['name'];
        $target = "../images/".basename($image);
		$sql->bind_param("sssi",$name,$bio,$image,$_GET["id"]);	
		if($sql->execute()) {
			$success_message = "Edited Successfully";
		} else {
			$error_message = "Problem in Editing Record";
		}

	}
	$sql = $conn->prepare("SELECT * FROM `artist_list` WHERE id=?");
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
<a href="artist_list-mumbai.php" class="btn btn-primary" role="button">Back To List</a>
    <form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
    <input type="file" class="btn btn-success" style="margin : 20px;" name="image">
    </div>
    <div>
    <p style="margin-left : 20px;">name of the artist:</p><input type="text" name="name" style="margin-left : 20px;" value="<?php echo $row["name"]?>"><br><br>
    <p style="margin-left: 20px;">Bio of the artist:</p><textarea rows="4" cols="50" name="bio" style="margin-left : 20px;"><?php echo $row["bio"]?></textarea>
    </div>
    <div>
    <button type="submit" name="submit" class="btn btn-success" style="margin : 20px;">UPLOAD</button>
    </div>
    </form>

<footer><img src="http://10.31.3.3/Nimg/Footer1.png"></footer>
</body>
</html>