<?php
session_start();
$conn=mysqli_connect('localhost','root','','organisation');
//Getting Input value
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  if(empty($username)&&empty($password)){
  $error= 'Fileds are Mandatory';
  }else{
 //Checking Login Detail
 $result=mysqli_query($conn,"SELECT*FROM user WHERE username='$username' AND password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1){
      $_SESSION['user']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'role'=>$row['role']
   );
   $role=$_SESSION['user']['role'];
   //Redirecting User Based on Role
    switch($role){
  case 'sadmin':
  header('location:sadmin.php');
  break;
  case 'admin_mum':
  header('location:admin_mum.php');
  break;
  case 'admin_pun':
  header('location:admin_pun.php');
  break;
  case 'admin_bsl':
  header('location:admin_bsl.php');
  break;
  case 'admin_sul':
  header('location:admin_sul.php');
  break;
  case 'admin_ngp':
  header('location:admin_ngp.php');
  break;
  case 'admin_mtn':
  header('location:admin_mtn.php');
  break;
  case 'admin_pr':
  header('location:admin_pr.php');
  break;
  case 'admin_kwv':
  header('location:admin_kwv.php');
  break;
  case 'admin_bsl-acl':
  header('location:admin_bsl-acl.php');
  break;
  case 'admin_nkrd':
  header('location:admin_nkrd.php');
  break;
  case 'admin_by':
  header('location:admin_by.php');
  break;
  case 'admin_mmr':
  header('location:admin_mmr.php');
  break;        
 }
 }else{
 $error='Your PassWord or UserName is not Found';
 }
}
}
?>
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
    background-image: url('../../imgs/full-bloom.png');
}    
</style>
<head>
<title>Enter Credentials</title>
</head>
<div align="center">
<div class="login-page">
<div class="form">
<form method="POST" action="" class="login-form">
<table>
   <tr>
  <td><input type="text" name="username" placeholder="Enter username"/></td>
   </tr>
   <tr>
  <td><input type="password" name="password"/ placeholder="Enter password"></td>
   </tr>
   <tr>
  <td><input type="submit" name="login" value="Login"/></td>
   </tr>
</table>
</form>
    </div>
    </div>
<?php if(isset($error)){ echo $error; }?>
</div>
</html>