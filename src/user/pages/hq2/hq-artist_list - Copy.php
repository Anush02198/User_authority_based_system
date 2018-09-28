
 <?php
  $db = mysqli_connect("localhost", "root", "", "organisation");
  $msg = "";
  $result = mysqli_query($db, "SELECT * FROM artist_list where uploaded_by = 'sadmin'");
?>
<!DOCTYPE html>
<html>
<head>
<title>Artist List</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../../../dist/css/nav.css">
</head>
<body>
<div id="page-container">
  <div id="header">
<center>
  <img src="../../imgs/CRCA.PNG" style='padding: top;border-left: 11px'>
     <marquee scrolldelay="120" style="color: #660000; font-size:10pt; font-weight:bold" width="940">Welcome to CRCA Website.</marquee>
  </center>
    </div>
<div class="navbar">
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
<div id="header"></div>
    <table class="table table-striped">
			 <tr>
				<th scope="col" width="20%"> name </th>
				<th scope="col" width="40%"> bio </th>
				<th scope="col" > Artist </th>
			  </tr>
		<tbody>		
			<?php
				if ($result->num_rows > 0) {		
					while($row = mysqli_fetch_array($result)) {
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
		</tbody>
	</table>
</body>
</html>