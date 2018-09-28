<!DOCTYPE html>
<html>
<head>
<title>Artist List</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../../../dist/css/nav.css">
</head>
<style>
    h2{
        padding-bottom: 0px;
        margin-top: 0px;
        padding-left: 20px;
    }
    h2::first-letter{
        font-size: 200%;
        color: red;
    }
    .select{
        margin-left: 20px;
        margin-bottom: 20px;
        margin-right: 10px;
    }    
</style>
<body>
<div id="page-container">
  <div id="header">
<center>
  <img src="../../imgs/CRCA.PNG" style='padding: top;border-left: 11px'>
     <marquee scrolldelay="120" style="color: black; font-size:10pt; font-weight:bold" width="940">Welcome to CRCA Website.</marquee>
  </center>
    </div>
<ul class='top-level'>
  <li>
    <a href='hqhome.php'>CRCA</a>
    <ul class='second-level'>
      <li>
        <a href='../hq2/org_chart.php'>Org Chart</a>
      </li>
      
    </ul>
  </li>
  <li>
    
  <li>
    <a href='hqawards.php'>Achievement And Awards</a>
  </li>
  <li>
    <a href='hq-artist_list.php'>Artist List</a>
  </li>
  <li>
    <a href='hqgallery.php'>Gallery</a>
  </li>
  <li>
    <a href='hq-video.php'>Videos</a>
  </li>
  <li>
    <a href='hqcontactus.php'>Contact Us</a>
  </li>
</ul>
<?php
$db = mysqli_connect("localhost", "root", "", "organisation");
$msg = "";
$role = "";
$result1 = mysqli_query($db, "SELECT DISTINCT `uploaded_by`,`division` FROM `artist_list`");
if (isset($_POST['submit'])) {
$role = $_POST['role'];
$result1 = mysqli_query($db, "SELECT DISTINCT `uploaded_by`,`division` FROM `artist_list`");
}
?>
      <?php if($role == 'sadmin'){
echo '<h2>Headquarter</h2>';
}
          else{ ?>
             <h2><?php
              echo substr($role, 6);?>
              </h2> <?php
          }
          ?>
<form action="#" method="post">   
<select class="select" name="role">
        <?php
            if ($result1->num_rows > 0) {		
                while($row = mysqli_fetch_array($result1)) {
        ?>
          <option value='<?php echo $row['uploaded_by']?>'><?php echo $row['division']?></option>
        <?php

                }
            }
?>
</select>
<input type="submit" name="submit" class="btn btn-success" value="SUBMIT" />
</form>
    <table class="table table-striped">
			 <tr>
				<th scope="col" width="20%"> name </th>
				<th scope="col" width="40%"> bio </th>
				<th scope="col" > Artist </th>
			  </tr>
<?php 
$conn=mysqli_connect("localhost","root","","organisation");
if ($conn-> connect_error)
{
  die("Connection failed:".$conn->connect_error);
}
$sql ="SELECT * from `artist_list` where uploaded_by = '$role' order by id";
mysqli_query($conn, $sql);

$result =$conn->query($sql);
if($result->num_rows>0)
{ 
 while($row=$result->fetch_assoc()){
?>
			<tr class="table-row" id="row-<?php echo $row["id"]; ?>"> 
				<td class="table-row"><?php echo $row["name"]; ?></td>
				<td class="table-row"><?php echo $row["bio"]; ?></td>
				<td class="table-row"><?php echo "<img src='../../../admin_CRUD/artist_list/images/".$row['image']."'width='250px;' height='300px;' >"; ?></td>
			</tr>

 			<?php
					}
				}
			?>
 </table>
</div>
</body>
</html>