<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "organisation");
$role = "";
$result1 = mysqli_query($db, "SELECT DISTINCT `uploaded_by`,`division` FROM `images`");
if (isset($_POST['submit'])) {
    $from_date = $_POST['from_date'];
    $to_date =$_POST['to_date'];
    $role = $_POST['role'];
    $result = mysqli_query($db, "SELECT * FROM images  WHERE year >= '$from_date' AND year <= '$to_date' AND uploaded_by = '$role'");
    $result1 = mysqli_query($db, "SELECT DISTINCT `uploaded_by`,`division` FROM `artist_list`");
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
      <?php if($role == 'sadmin'){
echo '<h2>Headquarter</h2>';
}
          else{ ?>
             <h2><?php
              echo substr($role, 6);?>
              </h2> <?php
          }
          ?>

       <div class="selectpicker">
        <form action="#" method="post">
            <select class="select" name="from_date">
                <option value="2018-01-01">2018-01-01</option>
                <option value="2019-01-01">2019-01-01</option>
                <option value="2020-01-01">2020-01-01</option>
                <option value="2021-01-01">2021-01-01</option>
                <option value="2022-01-01">2022-01-01</option>
            </select> <b>&nbsp; BETWEEN &nbsp;</b>
            <select class="selectpicker" name="to_date">
                <option value="2018-12-31">2018-12-31</option>
                <option value="2019-12-31">2019-12-31</option>
                <option value="2020-12-31">2020-12-31</option>
                <option value="2021-12-31">2021-12-31</option>
                <option value="2022-12-31">2022-12-31</option>
            </select> <b>&nbsp; AT &nbsp;</b>
            <select name="role">
        <?php
            if ($result1->num_rows > 0) {		
                while($row = mysqli_fetch_array($result1)) {
        ?>
          <option value='<?php echo $row['uploaded_by']?>'><?php echo $row['division']?></option>
        <?php

                }
            }
?>
</select> &nbsp;
<input type="submit" name="submit" class="btn btn-success" value="SUBMIT" />
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