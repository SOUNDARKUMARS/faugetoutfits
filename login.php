<?php
$lgsc=0;
$invd=0;
if ($_SERVER['REQUEST_METHOD']=='POST'){
  include'connection.php';
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="Select * from `register` where username='$username' and password='$password'";
  $result=mysqli_query($conn,$sql);
  
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
    // echo 'login succesful';
    $lgsc=1;

      // sessions starting
      
    session_start();
    $_SESSION['username']=$username;
    header('location:home.php');
    }else{
      // echo 'invalid data';
      $invd=1;
    } 
    
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="stylesignup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  



  <button class="registerbtn"><a href="sign.php">Register</a></button>

  <?php
  if($lgsc){
    echo'good';}
  if($invd){
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>
    <div>
      Invalid Username or Password , <strong>Try Again</strong>
    </div>
  </div>';
  }
  ?>

  <div class="container">
<form class="form" action="login.php" method="post">
    <span class="title">Login</span>
    
    <div class="inputs">
    <label for="username" class="label">Username</label>
    <input type="username" id="username" name="username" required="" class="input">
    <label for="password" class="label">Password</label>
    <input type="password" id="password" name="password" required="" class="input"></div>
    <button type="submit" name="submit" class="button22">Login</button>
  </form></div>
</body>
</html>