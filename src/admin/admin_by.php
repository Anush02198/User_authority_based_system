<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or admin to Access moderator.php page
if($_SESSION['user']['role'] !='sadmin' && $_SESSION['user']['role']!='admin_by'){
 //header('location:admin_pun.php');
    echo"YOU DO NOT HAVE PEMISSION.";
    exit;
}?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<title>Welcome</title> 
	<script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
   <style>
    
body{background-color: #ecf0f1;}

.navbar-inverse {
    background-color: #2C3E50;
    border-color: #2C3E50;
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 0px solid transparent;
}
.navbar-nav > li > a {
    padding-top: 20px;
    padding-bottom: 10px;
    line-height: 20px;
}
@media (min-width: 768px){

.navbar {
    border-radius: 0px;
}}

.navbar-brand {
    float: left;
    height: auto;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
}
 
.container-2{
    height: 1080px;           
       }
@media (min-width:768px){
.container-2{width:100%;float: left;}
}

@media (max-width:768px){
.container-2{width:100%;}
}
.container-2:before,
{
  display: table;
  content: " ";
}
.container-2:after,
{clear: both;}
@media (min-width: 768px){

#page-wrapper {
   
    padding: 0 30px;
    height: 800px;
    border-left: 1px solid #2c3e50;
}
}

#page-wrapper {
    padding: 0 15px;
    border: none;
    
}
@media (min-width: 768px){
.circle-tile {
    margin-bottom: 30px;
}
}

.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}

.circle-tile-heading {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 auto -40px;
    border: 3px solid rgba(255,255,255,0.3);
    border-radius: 100%;
    color: #fff;
    transition: all ease-in-out .3s;
}

/* -- Background Helper Classes */

/* Use these to cuztomize the background color of a div. These are used along with tiles, or any other div you want to customize. */

 .dark-blue {
    background-color: darkslategrey;
}
/* -- Text Color Helper Classes */

 .text-dark-blue {
    color: #34495e;
}

.circle-tile-heading .fa {
    line-height: 80px;
}

.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-description {
    text-transform: uppercase;
}

.text-faded {
    color: rgba(255,255,255,0.7);
}

.circle-tile-number {
    padding: 5px 0 15px;
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
}

.circle-tile-footer {
    display: block;
    padding: 5px;
    color: rgba(255,255,255,0.5);
    background-color: rgba(0,0,0,0.1);
    transition: all ease-in-out .3s;
}

.circle-tile-footer:hover {
    text-decoration: none;
    color: rgba(255,255,255,0.5);
    background-color: rgba(0,0,0,0.2);
}
              .col-lg-2,.col-sm-6{
   margin-left: 90px;
}
    </style>
    </head>


<body>
    
 
                                  <!--=============================
                                             NAVIGATION
                                   =============================-->
    
<!--top nav start=======-->
<nav class="navbar navbar-inverse top-navbar" id="top-nav">
  <div class="container-fluid">
    <div class="navbar-header">      
      <a class="navbar-brand" href="#">CRCA</a>
    </div>
        <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="logout.php">
                <p style="color: white">logout</p>
            </a>
        </li>
    </ul>      
    </div>  
</nav>    
<!--    top nav end===========-->
    
    <!-- begin SIDE NAV USER PANEL -->     
    <div class="container-2">
     <div id="page-wrapper">   
      <div class="row">
     <div class="col-md-12">
      <div class="page-title">
       <h2 style="padding-bottom:30px;">Welcome...</h2>
       </div>
      </div>
     </div> 
                                                 
        <div class="row" >
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    TABLE 1
                                </div>
                                <div class="circle-tile-number text-faded">
                                    Artists
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="../admin_CRUD/artist_list/artist-by/artist_list-by.php" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                                        <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    TABLE 2
                                </div>
                                <div class="circle-tile-number text-faded">
                                    Gallery
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="../admin_CRUD/gallery/gallery-by/gallery-by.php" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                                        
                                        <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    TABLE 3
                                </div>
                                <div class="circle-tile-number text-faded">
                                    Achievments
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="../admin_CRUD/achievements/achievement_by.php" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>  <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    TABLE 4
                                </div>
                                <div class="circle-tile-number text-faded">
                                    Videos
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="../admin_CRUD/video/video_by.php" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>  
                    </div>       
    </div><!-- page-wrapper END-->
   </div><!-- container-1 END-->
</body>
</html>