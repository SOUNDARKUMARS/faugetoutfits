<?php
$flag=0;
if(isset($_POST['submit'])){
    // if ($_SERVER['REQUEST_METHOD']=='POST'){
    include'rewcon.php';

    $email=$_POST['email'];
    $text=$_POST['text'];

    $datacon=mysqli_query($conn,"insert into `commentnew`(email,text) values('$email','$text')");

    if($datacon){
        $flag=1;    
        // echo'data got';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add review</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <style>

    </style>
</head>
<body>


<div class="navbar">
            <div class="logo">
                <img src="pics/logo.png" alt="logo" width="125px">
            </div>
            <nav class="navitems">
            <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="showcomments.php">Reviews</a></li>
            </ul>
            </nav>
        </div>


    <?php
    if($flag){
        echo '<div class="alert alert-primary d-flex align-items-center" role="alert">

        <div>
          Great !! Thank You For Your Time.
        </div>
      </div>';
    }
    ?>
<div class="rewcont">
    <div class="subscribe">
    <p>Hello There !</p>
        <form action="reviews.php" method="post">
            <input type="text" name="email" class="subscribe-input" placeholder="Your name once..">
            <textarea name="text" placeholder="  Add your comments/reviews here..." id="comments" cols="30" rows="5"></textarea>
            <br>
            <button class="submit-btn" type="submit" name="submit">submit</button>
          
        </form>
        <button><a href="orders.php"></a></button>
    </div>
</div>    
</body>
</html>