<?php 
$conn=mysqli_connect("localhost","root","","organisation");
if ($conn-> connect_error)
{
  die("Connection failed:".$conn->connect_error);
}

$sql ="SELECT * from `about-us` where uploaded_by = 'sadmin'";

mysqli_query($conn, $sql);
$result =$conn->query($sql);
if($result->num_rows>0)
{
  $row=$result->fetch_assoc();
}
 $conn->close();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../dist/css/nav.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<title>Home</title>
<style>
    h2{
        padding-bottom: 0px;
    }
    h2::first-letter{
        font-size: 200%;
        color: red;
    }
    p{
        margin-left: 15px;
        margin-right: 20px;
    }
    p::first-letter{
        font-size: 200%;
        color: red;
    }
    
</style>
</head>
<body>
<div id="page-container">
  <center>
  <img src="../../imgs/CRCA.PNG">
     <marquee scrolldelay="120" style="color: black; font-size:10pt; font-weight:bold" width="940">Welcome to CRCA Website.</marquee>
  </center>
<ul class='top-level'>
  <li>
    <a href='hqhome.php'>CRCA</a>
    <ul class='second-level'>
      <li>
        <a href='org_chart.php'>Org Chart</a>
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

</div>
  <tr>
  <h2>&nbsp;&nbsp;<b>ABOUT US</b></h2>
    <p> 
<?php
  echo $row['about-us'];
  ?>
</p>
  </tr>
</body>
</html>