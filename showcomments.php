<?php
include"rewcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <title>User Comments</title>

</head>
<body>


<div class="navbar">
            <div class="logo">
                <img src="pics/logo.png" alt="logo" width="125px">
            </div>
            <nav class="navitems">
            <ul>
                    <li><a href="home.php">Home</a></li>

                    <li><a href="reviews.php">Reviews</a></li>
            </ul>
            </nav>

        </div>


<div class="userrew"></div>
<div class="alert alert-primary" role="alert">
  These are the public comments/reviews.To add yours <a href="reviews.php" class="alert-link">click here</a> 
</div>
    <?php
        $sql="SELECT * FROM commentnew;";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);

        if($resultCheck>0){
            while($row=mysqli_fetch_assoc($result)){
                echo '&nbsp;&nbsp;'.('<strong><i class="fa-solid fa-user"></i></strong>');
                 echo $row['email'].'&nbsp;&nbsp; :&nbsp;' .'<br>';
                 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['text'].'<br>';
                 echo '<br>';
            }

        }
    ?>
</body>
</html>