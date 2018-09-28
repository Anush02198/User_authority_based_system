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
<head>
<title>PHP MySQL Role Based Access Control</title>
</head>
<div align="center">
<h3>PHP MySQL Role Based Access Control</h3>
<form method="POST" action="">
<table>
   <tr>
     <td>UserName:</td>
  <td><input type="text" name="username"/></td>
   </tr>
   <tr>
     <td>PassWord:</td>
  <td><input type="text" name="password"/></td>
   </tr>
   <tr>
     <td></td>
  <td><input type="submit" name="login" value="Login"/></td>
   </tr>
</table>
</form>
<?php if(isset($error)){ echo $error; }?>
</div>
</html>