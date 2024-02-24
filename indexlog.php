<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>PRIORMESS</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/load.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo1.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                    <li class="active"> <a href="home.html">Home</a> </li>
                      <li> <a href="orders.html">Orders</a> </li>
                      <li> <a href="cart.html">Cart </a> </li>
                      <li> <a href="login.html">Login</a> </li>
                      <li> <a href="signup.html">Signup</a> </li>
                      <li> <a href="about.html">About</a> </li>
                      <li> <a href="contact.html">Contact</a> </li> 
                      <!-- <li> <a href="signup.html">Signup</a> </li> -->
                      <li class="active"> <a href="#"><?php
                      include("connection.php");
                      error_reporting(0);
                      session_start();

                      echo "Logged in as  VB".$_SESSION['email'];
                                ?></a> </li>

                     </ul>
                   </nav>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-bg">
                      <span></span>
                      <h1 text-color="red">PRIORMESS</h1>
                      <p>>Welcome to PriorMess....Mane Oota at Nimma Canteen</p>
                      <a href="orders.html">MENU</a> <a href="cart.html">Place Order </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container ">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-md-12">
                    <div class="text-bg">
                        <span>Missing Home Food</span>
                      <h1>PRIORMESS</h1>
                      <p>>Welcome to PriorMess....Mane Oota at Nimma Canteen</p>
                      <a href="orders.html">MENU</a> <a href="cart.html">Place Order </a>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-bg">
                        <span>Gossip Station</span>
                      <h1>PRIORMESS</h1>
                      <p>>Welcome to PriorMess....Mane Oota at Nimma Canteen</p>
                      <a href="orders.html">MENU</a> <a href="cart.html">Place Order </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>

    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

    </a>
   </div>



</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row display_boxflex">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>About Us</h2>
          <p>Namaste and welcome to the Priormess Website! Our mess is your one-stop destination for delicious and healthy food options that cater to the Indian palate. Our menu features a wide range of options, including traditional Indian dishes, popular street food, and refreshing beverages.

At the Priormess, we take pride in using only the freshest and high-quality ingredients to prepare our food. We offer a variety of vegetarian options that are sure to tantalize your taste buds. From piping hot samosas to delicious biryanis and hearty thalis, we've got something for everyone.

Explore our website to learn more about our mouth-watering menu, catering services, and online ordering options. Thank you for choosing the Priormess Website as your go-to destination for authentic and delicious Home-Cooked food on campus!</p>
          <a href="#">Read More</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="images/abt.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->




<!-- upcoming -->
<div id="upcoming" class="upcoming">
  <div class="container-fluid padding_left3">
    <div class="row display_boxflex">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
       <div class="box_text">
          <div class="titlepage">
            <h2>Cart</h2>
          </div>
          <p>Namaste and welcome to the Priormess Website! Our mess is your one-stop destination for delicious and healthy food options that cater to the Indian palate. Our menu features a wide range of options, including traditional Indian dishes, popular street food, and refreshing beverages.

At the Priormess, we take pride in using only the freshest and high-quality ingredients to prepare our food. We offer a variety of vegetarian options that are sure to tantalize your taste buds. From piping hot samosas to delicious biryanis and hearty thalis, we've got something for everyone.

Explore our website to learn more about our mouth-watering menu, catering services, and online ordering options. Thank you for choosing the Priormess Website as your go-to destination for authentic and delicious Home-Cooked food on campus!</p>
          <a href="Javascript:void(0)"> Order Now</a>
        </div>
      </div>

      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
         <div class="cart">
           <figure><img src="images/c1.jpg" alt="#"/></figure>
        </div>
          </div>
  </div>
    </div>
</div>
<!-- end upcoming -->

<!-- Gallery -->


<div id="gallery" class="Gallery">
  <div class="container">
    <div class="row display_boxflex">
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
            <div class="Gallery_img">
            <figure><img src="images/bf1.jpg" alt="#"/></figure>
            </div>
            <div class="hover_box">

              <ul class="icon_hu">
                 <h3>Breakfast</h3>
                <li><a href="breakfast.html" target="_blank"><img src="icon/h.png" alt="#"/></a></li>
                 <li><a href="breakfast.html" target="_blank"><img src="icon/h.png" alt="#"/></a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
            <div class="Gallery_img">
              <figure><img src="images/ln2.jpg" alt="#"/></figure>
            </div>
            <div class="hover_box">

              <ul class="icon_hu">
                 <h3>Lunch</h3>
                <li><a href="lunch.html" target="_blank"><img src="icon/h.png" alt="#"/></a></li>
                 <li><a href="lunch.html" target="_blank"><img src="icon/h.png" alt="#"/></a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott1">
            <div class="Gallery_img">
              <figure><img src="images/sn.jfif" alt="#"/></figure>
            </div>
            <div class="hover_box">

              <ul class="icon_hu">
                 <h3>Snacks</h3>
                <li><a href="snacks.html" target="_blank"><img src="icon/h.png" alt="#"/></a></li>
                 <li><a href="snacks.html" target="_blank"><img src="icon/h.png" alt="#"/></a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="Gallery_img">
              <figure><img src="images/dn.jpg" alt="#"/></figure>
            </div>
            <div class="hover_box">

              <ul class="icon_hu">
                 <h3>Dinner</h3>
                <li><a href="dinner.html" target="_blank"><img src="icon/h.png" alt="#"/></a></li>
                 <li><a href="dinner.html" target="_blank"><img src="icon/h.png" alt="#"/></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="Gallery_text">
          <div class="titlepage">
            <h2>Orders</h2>
          </div>
          <p>Welcome to Priormess and this for food lovers, where you will find the priority in our canteen  in
          your nearest college canteen , gossips with food.!!</p>
          <a href="orders.html">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end Gallery -->

<!-- end Gallery -->




    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <form class="contact_bg" action="contact.php" method="post">
            <div class="row">
              <div class="col-md-12">

                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Name" type="text" name="Name">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Email" type="text" name="Email_ID">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Phone" type="text" name="phone">
                </div>
                <div class="col-md-12">
                  <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <button class="send" name="submit">Send</button>
                </div>
              </div>
            </div>
            </form>

            </div>
            <div class="col-md-12 border_top">
              <form class="news" action="subscribe.php" method="post">
               <h3>Newsletter - Subscribe to get notify abut latest menu</h3>
                <input class="newslatter" placeholder="ENTER YOUR MAIL" type="email" name="sub">
                <button class="submit" name="submit">Subscribe</button>
              </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                  <div class="address">
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="icon/loc.png" alt="#" /></a>Locations

                        <li>

                            <a href="#"><img src="icon/call.png" alt="#" /></a>+911234567892 </li>
                          <li>
                            <a href="#"><img src="icon/email.png" alt="#" /></a>PRIORMESS@gmail.com </li>
                          </ul>


                        </div>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                           <ul class="social_link">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                          </ul>
                       </div>
                    </div>
                  </div>

                </div>

              </div>
               <div class="container">
              <div class="copyright">

                  <p>Copyright 2023 All Right Reserved By <a href="https://quad-cinema.blogspot.com/">PRIORMESS</a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




</body>

</html>
