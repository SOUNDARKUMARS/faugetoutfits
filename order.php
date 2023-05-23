<?php
$flag=0;
// if ($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['submit'])){
  include'orderconn.php';
  $username=$_POST['username'];
  $productid=$_POST['productid'];
  $quantity=$_POST['quantity'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $adr=$_POST['adr'];


  $datacon=mysqli_query($conec,"insert into orddet(username,productid,quantity,email,phone,adr) values('$username','$productid','$quantity','$email','$phone','$adr')");

  if($datacon){
    // echo 'data received';
    $flag=1;
  }else{
    die(mysqli_error($conec));
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>order</title>
    <style>
      body{
        background: radial-gradient(rgb(186, 205, 212),rgb(21, 134, 175),rgb(11, 75, 94));
      }

    </style>
</head>
<body>
  <div class="cont">
<?php
if($flag){
  echo '<div class="ordrec">
  <h3 style="text-align: center; color: rgb(0, 255, 0);">Your Order received Successfully !! We will update you with each actions</h3>
</div>';
}
?>
    <div class="ordcont">
    <div class="contact-form">
        <span style="text-align: center;" class="heading">Order Here</span>
        <form action='order.php' method='post'>
          <label for="name">Name:</label>
          <input name="username" id="username" type="text" required="">

          <label for="name">Product Id:</label>
          <input name="productid" id="productdid" type="text" required="">

          <label for="name">Quantity:</label>
          <input name="quantity" id="quantity" type="number" required="">


          <label for="email">Email:</label>
          <input type="email" name="email"id="email" name="email" required="">

          <label for="name">Contact Number:</label>
          <input name="phone" id="phone" type="number" required="">

          <label for="message">Delivery Address:</label>
          <textarea id="adr" name="adr" required="" cols="80" rows="20"></textarea>

          <button type="submit" name="submit">Submit</button>
        </form>
      </div>
    </div>
</div>
</body>
</html>