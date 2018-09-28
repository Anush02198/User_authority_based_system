
<!DOCTYPE html>
<html>
<head>
  <title>Awards</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../../dist/css/nav.css">
</head>
<body>
<div id="page-container">
  <div id="header">
  <center>
  <img src="../../imgs/CRCA.PNG" style='padding: top;border-left: 11px'>
     <marquee scrolldelay="120" style="color: #660000; font-size:10pt; font-weight:bold" width="940">Welcome to CRCA Website.</marquee>
  </center>
           <ul class='top-level'>
    <li>
    <a href='#'>CRCA</a>
    <ul class='second-level'>
      <li>
        <a href='../hq/hqhome.php'>Headquarter</a>
      </li>
      <li>
        <a href='../mumbai/mumhome.php'>Mumbai</a>
      </li>
      <li>
        <a href='../pune/punhome.php'>Pune</a>
      </li>
      <li>
        <a href='../bhusaval/bslhome.php'>Bhusaval</a>
      </li>
      <li>
        <a href='../solapur/sulhome.php'>Solapur</a>
      </li>
      <li>
        <a href='../nagpur/ngphome.php'>Nagpur</a>
      </li>
      <li>
        <a href='../matunga/mtnhome.php;'>MTN WS</a>
      </li>
      <li>
        <a href='../parel/prhome.php'>PR WS</a>
      </li>
      <li>
        <a href='../kwv/kwvhome.php'>KWV WS</a>
      </li>
     <li>
        <a href='../bsl-acl/bsl-aclhome.php'>ACL BCL WS</a>
      </li>
      <li>
        <a href='../nkrd/nkrdhome.php'>TMW NKRD WS</a>
      </li>
      <li>
        <a href='../by/byhome.php'>SNT BY WS</a>
      </li>
      <li>
        <a href='../mmr/mmrhome.php'>MMR WS</a>
      </li>
    </ul>
  </li>
   <li>
    <a href='hqhome.php'>HOME</a>
  </li>
  <li>
    <a href='javascript:;'>Organisation Chart</a>
    <ul class='second-level'>
      <li>
        <a href='javascript:;'>Headquarter</a>
      </li>
      <li>
        <a href='javascript:;'>Mumbai</a>
      </li>
      <li>
        <a href='javascript:;'>Pune</a>
      </li>
      <li>
        <a href='javascript:;'>Bhusaval</a>
      </li>
      <li>
        <a href='javascript:;'>Solapur</a>
      </li>
      <li>
        <a href='javascript:;'>Nagpur</a>
      </li>
      <li>
        <a href='javascript:;'>MTN WS</a>
      </li>
      <li>
        <a href='javascript:;'>PR WS</a>
      </li>
      <li>
        <a href='javascript:;'>KWV WS</a>
      </li>
      <li>
        <a href='javascript:;'>ACL BCL WS</a>
      </li>
      <li>
        <a href='javascript:;'>TMW NKRD WS</a>
      </li>
      <li>
        <a href='javascript:;'>SNT BY WS</a>
      </li>
      <li>
        <a href='javascript:;'>MMR WS</a>
      </li>

    </ul>
  </li>
  <li>
    <a href='hqawards.php'>ACHIEVEMENTS AND AWARDS</a>
  </li>
  <li>
    <a href='hq-artist_list.php'>OUR ARTISTS'</a>
  </li>
  <li>
    <a href='hqgallery.php'>GALLERY</a>
  </li>
  <li>
    <a href='hq-video.php'>VIDEOS</a>
  </li>
  <li>
    <a href='hqcontactus.php'>CONTACT US</a>
  </li>
  <li>
    <a href='../../../admin/index.php'>LOGIN</a>
  </li>
</ul>
</div>
<?php 
$conn=mysqli_connect("localhost","root","","organisation");
if ($conn-> connect_error)
{
  die("Connection failed:".$conn->connect_error);
}

$sql ="SELECT * from `video` where uploaded_by = 'sadmin'";

mysqli_query($conn, $sql);
$result =$conn->query($sql);
if($result->num_rows>0)
{ 
 while($row=$result->fetch_assoc()){
?>
<iframe width="420" height="315"
src="<?php echo $row["video"] ?>">
</iframe>
 			<?php
					}
				}
 $conn->close();
 ?>
</body>
</html>