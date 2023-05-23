<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <script src="https://kit.fontawesome.com/bb9f864293.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <title>Fauget Outfits </title>
   
  
</style>
</head>
<body>

    <!--header area  -->
<div class="header">
    <div class="acontainer">
        <div class="navbar">
            <div class="logo">
                <img src="pics/logo.png" alt="logo" width="125px">
            </div>
            <nav class="navitems">
            <ul>
                    <li><a href="#dailyoffer">Daily Offer</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="#footer">Contact</a></li>
                    <li><a href="#reviews">Reviews</a></li>
            </ul>
            </nav>

          <div class="lobt">
          <a href="login.php"> <button class="logout">
            <div>
              <span>
                <p>Logout</p><p></p>
              </span>
            </div>
            <div>
              <span>
                <p>to login</p><p></p>
              </span>
            </div>
          </button></a></div>

             
            <!--button end  -->
        </div>
        <h2 class="users">Hello, 
        <?php
        echo $_SESSION['username'];
        ?>  Welcome to Our Page</h2>
    </div>
    <div class="row">
        <div class="headertexts">
            <h1 >All New Products Chill at Home.  <br>Product will Reach Soon !</h1>
            <p>We are running a highly relaible online supermarket named 'SK Online Bag' <br> having lot many new items ahead.Go check it out !</p>
            <button class="go"><a href="#goahead">Go Ahead &#x2192; </a></button>
        </div>
        <div class="headerimage">
            <img src="pics/undraw_shopping_app_flsj.svg" width="500px" alt="">
        </div>
    </div>
</div>
 
<!--------------------product catogories------------------------->
<div id="products">
    <div class="categories">
        <div class="smallcont">
            <div class="row">
                <div class="col-1"><img src="pics/category-1.jpg" alt=""></div>
                <div class="col-1"><img src="pics/category-2.jpg" alt=""></div>
                <div class="col-1"><img src="pics/category-3.jpg" alt=""></div>
            </div>
        </div>
    </div>
</div>

<!----------------------featured products------------------------>
<div id="goahead">
<div class="smallcont">
    <h2 class="title">Featured Products</h2>
    <div class="row">
       <div class="col-4">
        <img src="pics/product-1.jpg">
        <a href="order.php"><h4>Printed Red Tshirts <span style="color:black">PRT</span></h4></a>
        <div class="rating">
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-regular fa-star"></i> 
        </div>
       
        <p>$10.00</p>
       </div>
       <div class="col-4">
        <img src="pics/product-2.jpg">
        <a href="order.php"><h4>Running Shoes<span style="color:black">RS</span></h4></a>
        <div class="rating"> <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-regular fa-star"></i>
            <i class="fa-sharp fa-regular fa-star"></i></div>
       
        <p>$20.00</p>
       </div>
       <div class="col-4">
        <img src="pics/product-3.jpg">
       <a href="order.php"> <h4>Track Pants<span style="color:black">TP</span></h4></a>
        <div class="rating">
            <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
        </div>
                        
        <p>$15.00</p>
       </div>
       <div class="col-4">
        <img src="pics/product-4.jpg">
        <a href="order.php"><h4>Plain Tshirts<span style="color:black">PTS</span></h4></a>
        <div class="rating">       
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-regular fa-star"></i></div>
 
        <p>$10.00</p>
       </div>
       </div>
        <div class="smallcont">
        <h2 class="lp">Latest Products</h2>
            <div class="row">
                <div class="col-4">
                    <img src="pics/product-5.jpg">
                    <a href="order.php"><h4>Casual Shoes<span style="color:black">CS</span></h4></a>
                    <div class="rating">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                    </div>
                    <p>$10.00</p>
                   </div>
                   <div class="col-4">
                    <img src="pics/product-6.jpg">
                    <a href="order.php"><h4>Casual Tshirts<span style="color:black">CTS</span></h4></a>
                    <div class="rating">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                    </div>

                    <p>$20.00</p>
                   </div>
                   <div class="col-4">
                    <img src="pics/product-7.jpg">
                    <a href="order.php"><h4>Ankle Socks'<span style="color:black">ASK</span></h4></a>
                    <div class="rating"><i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                        <i class="fa-sharp fa-regular fa-star"></i></div>
                        
                    <p>$15.00</p>
                   </div>
                   <div class="col-4">
                    <img src="pics/product-8.jpg">
                    <a href="order.php"><h4>Wrist Watches<span style="color:black">WW</span></h4></a>
                    <div class="rating">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                    </div>


                    <p>$10.00</p>
                   </div>
            </div>
            
        </div>
        <div class="smallcont">
           
                <div class="row">
                    <div class="col-4">
                        <img src="pics/product-9.jpg">
                        <a href="order.php"><h4>Wrist Watches<span style="color:black">WW2</span></h4></a>
                        <div class="rating"> <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-regular fa-star"></i></div>
                       
                        <p>$10.00</p>
                       </div>
                       <div class="col-4">
                        <img src="pics/product-10.jpg">
                       <a href="order.php"><h4>Sport Shoes<span style="color:black">SS</span></h4></a>
                        <div class="rating"><i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke"></i></div>
                        
                        <p>$7.00</p>
                       </div>
                       <div class="col-4">
                        <img src="pics/product-11.jpg">
                        <a href="order.php"><h4>Casual Shoes<span style="color:black">CS2</span></h4></a>
                        <div class="rating">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke"></i>
                            <i class="fa-sharp fa-regular fa-star"></i></div>
                        
                        <p>$10.00</p>
                       </div>
                       <div class="col-4">
                        <img src="pics/product-12.jpg">
                        <a href="order.php"><h4>Track Pants<span style="color:black">PT2</span></h4></a>                        <div class="rating">   <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-regular fa-star"></i></div>
                           
                        <p>$7.00</p>
                       </div>
                </div>
                
                
            </div>
       </div>
    
</div>


<!--------------------------------offer--------------------------------->
<div id="dailyoffer">
<h2 class="daily">Daily Deals</h2>
<div class="offer">

    <div class="smallcont">
       
        <div class="row">
            <div class="col-1">
                <img src="pics/exclusive.png" class="offerimg">
            </div>
            <div class="miband">
                <p>Exclusively at Very Low Price</p>
                <a href="order.php"><h1>Mi Smart Band 4<span style="color:black;font: weight 20px;">MB4</span></h1></a>
                <br>
                <small class="hello">This fits your . Make sure this fits by entering your model number. Languages Included English and <br> Chinese. Wristband width 18mm, Adjustable wrist  strap length 155-216mm Battery Life: 135mAh battery capacity <br> built in the Mi Band 4, max working time up to  20 days after a full charging.</small>
                <br>
                <br>
                <!-- <button class="buy"><a href="order.php">Buy Now &nbsp;&nbsp; &#x2192; </a></button> -->
                <button  class="buy"><a href="order.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span> Buy Now</a></span>
                </button>
            </div>
        </div>
    </div>
</div>
</div>
<!--------------------------------testimonial---------------------------->
<div id="reviews">
<div class="testimonial">
    <div class="testcont">
        <div class="rowt">
            <div class="text1">
               
                <pre><i class="fa-solid fa-quote-left"></i><p>This online shopping website has completely changed 
the way I shop. With their huge selection of products and
competitive prices,I can always find what I need 
without having to leave house.The checkout process is
quick and seamless, and I love the added bonus of 
freeshipping on orders over a certain amount!   <i class="fa-solid fa-quote-right"></i></pre>
<br>
                <div class="rating">
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                </div>
                <br>
                <div><img src="pics/user-1.png" alt=""></div>
                <br>
                <h3>Sean Parker</h3>
            </div>
            <div class="text1">
               <pre><i class="fa-solid fa-quote-left"></i><p>I absolutely love shopping on this website!
The user interface is so easy to navigate 
and I can always find exactly what I'm 
looking for. Plus, the shipping is always 
super fast and the customer service team
is incredibly helpful.   <i class="fa-solid fa-quote-right"></i></pre>
<br>
            <div class="rating">
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
            </div>
            <br>
            <img src="pics/user-2.png" alt="">
            <br>
            <br>
            <h3>Maxwel Brown</h3>
            </div>
            <div class="text1">
               
                <pre><i class="fa-solid fa-quote-left"></i><p>At first, I wasn't sure whether any of my
photos were good enough incomparison to the
other photos I saw onthe site, but I uploaded
a few anyway. I was quite startled to see  how
many views and downloads my first  uploads got
into the amzing site.   <i class="fa-solid fa-quote-right"></i></pre>

<br>
<div class="rating">
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
</div>
<br>
<img src="pics/user-3.png" alt="">
<br>
<br>
<h3>Arden Dane</h3>
            </div>
           </div>
        </div>
    </div>
</div>
</div>
<!------------------------- Brands ----------------------------->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="addcomment">
    <a href="showcomments.php"><button class="addcommentbtn">More Reviews...</button></a>
</div>
<br>
<br>
<div class="addcomment">
    <a href="reviews.php"><button class="addcommentbtn">Add Comments</button></a>
</div>

<div class="brands">
    <div class="smallcont">
        <div class="row">
          <div class="col-5"><img src="pics/logo-coca-cola.png" alt=""></div>
          <div class="col-5"><img src="pics/logo-godrej.png" alt=""></div>
          <div class="col-5"><img src="pics/logo-oppo.png" alt=""></div>
          <div class="col-5"><img src="pics/logo-paypal.png" alt=""></div>
          <div class="col-5"><img src="pics/logo-philips.png" alt=""></div>  
        </div>
    </div>
</div>
<!-- -----------------------------footer-------------------- -->
<div id="footer">
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <a href=""><h3>Download App</h3></a>
                
                <p> Download the app that is available at playstore and appstore</p>
                <br>
                <br>
                <a href="https://play.google.com/store/apps/details?id=com.ril.ajio"><img src="pics/play-store.png" width="120px" alt=""></a>
                
                <a href="https://www.apple.com/app-store/"><img src="pics/app-store.png" width="120px" alt=""></a>
            </div>
            <div class="footer-col-2">
                <img src="pics/logo.png" width="120px" alt="">
                <p><Strong>Descrition : </Strong> This is a website that allows to buy things from online <br>With return policies allowing upto 14 days with good condition. <br> To sell products contact us with the given datails.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="">Coupons</a></li>
                    <li><a href="">Blog Posts</a></li>
                    <li><a href="">Return Policy</a></li>
                    <li><a href="">Order Queries</a></li>
                    <li><a href="">Join Affilate</a></li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="https://youtube.com/">YouTube</a></li>
                    <li><a href="https://www.facebook.com/">FaceBook</a></li>
                    <li><a href="https://www.secure.instagram.com/">Instagram</a></li>
                    <li><a href="https://www.whatsapp.com/download">Whatsapp</a></li>
                    <li><a href="https://twitter.com/">Twitter</a></li>
                </ul>
            </div>
            
        </div>
        <br>
        <hr>
        <br>
        <p class="copyright">  <i class="fa-regular fa-copyright"></i>  &nbsp;&nbsp;&nbsp;Copyright 2023 - Soundarkumar S  </p>
    </div>
</div>
</div>
</body>
</html>