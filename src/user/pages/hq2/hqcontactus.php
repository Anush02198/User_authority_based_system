<?php 
$conn=mysqli_connect("localhost","root","","organisation");
if ($conn-> connect_error)
{
  die("Connection failed:".$conn->connect_error);
}

$sql ="SELECT * from `contact-us` where uploaded_by = 'sadmin'";

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<style>
    .info{
        padding-left: 20px;
    }    
</style>
<body>

<div id="page-container">
  <div id="header">
  <center>
  <img src="../../imgs/CRCA.PNG">
     <marquee scrolldelay="120" style="color: black; font-size:10pt; font-weight:bold" width="940">Welcome to CRCA Mumbai Division</marquee>
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
<div class="info">
<h4 style="padding: 0px; margin: 0px;">
<b><?php echo $row['name']?></b><br><br></h4>
  <b>Address:</b>
    <?php echo $row['address']; ?>
<br/><br/>

<i class="fas fa-mobile" style="font-size:30px;"></i>&nbsp; <?php echo $row['phno-1']?><br><br>
<i class="fas fa-mobile" style="font-size:30px;"></i>&nbsp;<?php echo $row['phno-2']?> <br><br>
<i class="fas fa-at" style="font-size:30px;"></i>&nbsp; <?php echo $row['email']?><br><br>

<br/><br/>
 </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
