<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "organisation");
if (isset($_POST['submit'])) {
    $from_date = $_POST['from_date'];
    $to_date =$_POST['to_date'];
    $result = mysqli_query($db, "SELECT * FROM images  WHERE year >= '$from_date' AND year <= '$to_date' AND uploaded_by = 'sadmin'");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../dist/css/nav.css">

    <title>Gallery</title>
  </head>
  <style>
.modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }

.modal-body {
  position:relative;
  padding:0px;
  min-height:400px;
  background:#ccc;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}
#image {
  min-height:200px;
}
#column{
          display: inline-block;
          margin-left: 50px;
          margin-bottom: 20px;
      }
      .selectpicker{
          margin-bottom: 20px;
      }   
    </style>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
       <div id="header">
<center>
  <img src="../../imgs/CRCA.PNG" style='padding: top;border-left: 11px'>
     <marquee scrolldelay="120" style="color: #660000; font-size:10pt; font-weight:bold" width="940">Welcome to CRCA Website.</marquee>
  </center>
    </div>
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
      <div class="container">
       <div class="selectpicker">
        <form action="#" method="post">
            <select class="selectpicker" name="from_date">
                <option value="2018-01-01">2018-01-01</option>
                <option value="2019-01-01">2019-01-01</option>
                <option value="2020-01-01">2020-01-01</option>
                <option value="2021-01-01">2021-01-01</option>
                <option value="2022-01-01">2022-01-01</option>
            </select> BETWEEN
            <select class="selectpicker" name="to_date">
                <option value="2018-12-31">2018-12-31</option>
                <option value="2019-12-31">2019-12-31</option>
                <option value="2020-12-31">2020-12-31</option>
                <option value="2021-12-31">2021-12-31</option>
                <option value="2022-12-31">2022-12-31</option>
            </select>
            <input type="submit" name="submit" value="SUBMIT" />
        </form><br>
    </div>
  <div class="gallery">
    <?php
    if (!empty($result)) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='column'>";
            echo "<img src='../../../admin_CRUD/artist_list/images/".$row['images']."' style='width:300px; height: 140px;' data-toggle='modal' data-bigimage= '../../../admin_CRUD/artist_list/images/".$row['images']."' data-target='#myModal'class='img-fluid'>";
        echo "</div>";
    }
} 
?>
  </div>
  <img src="../../admin_CRUD/gallery/images/" alt="">
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
                <img src="//media.tenor.com/images/556e9ff845b7dd0c62dcdbbb00babb4b/tenor.gif" alt="" id="image" class="img-fluid">      
      </div>

    </div>
  </div>
</div> 
  
  
  
</div>

<script>
    
$(document).ready(function() {

// Gets the video src from the data-src on each button
var $imageSrc;  
$('.gallery img').click(function() {
    $imageSrc = $(this).data('bigimage');
});
console.log($imageSrc); 
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {   
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#image").attr('src', $imageSrc  ); 
})
// reset the modal image
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#image").attr('src',''); 
}) 

});   
</script>
    </body>
</html>