<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "organisation");
function make_query($connect)
{
 $query = "SELECT * FROM `root_images` ORDER BY id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <img src="../admin_CRUD/gallery-root/images-root/'.$row["image"].'"/>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>CRCA</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 </head>
 <style>
body{
padding:0px;
margin:0px;
}
     .container-fluid{
        position: relative;
         z-index: 100;
         width: 100%;     
        padding: 0px;

     }
     .button{
     margin:150px 530px;;
     position: absolute;
     z-index: 1;
     }
     .text{
         position: absolute;
         color: white;
         z-index: 1;
         font-size: 80px;
         font-weight: bolder;
         margin-left: 540px;
     }
</style>
 <body>
  <br />
  <div class="container-fluid">
  <h1 class="text" align="center">CRCA</h1>
   <div class="button">
   <a href="../admin/index.php" class="btn btn-danger" role="button" style="float : right; margin-left:30px;"><i class="fa fa-user"> </i>  Admin Login</a>
   <a href="../user/pages/hq2/hqhome.php" class="btn btn-primary" role="button" style="float : right;"><i class="fa fa-home"></i> Visit Website</a>  </div>
    <br>
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>
 </body>
</html>