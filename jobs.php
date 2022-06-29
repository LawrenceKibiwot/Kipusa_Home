<!DOCTYPE html>
<html lang="zxx">
<?php
// include "db.php";

?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Kipusa Home Template">
    <meta name="keywords" content="Kipusa Home, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kipusa Home | Jobs</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <span>Call us for any questions</span>
            <h4>+254 740 615 970</h4>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="projects.php">Gallery</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li class="active"><a href="about.php">About</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                            <li><a href="./blog.html">Blog </a></li>                     
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__widget">
                        <span>Call us for any questions</span>
                        <h4>+254 740 615 970</h4>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Jobs!</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Jobs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$sel="SELECT * FROM KH_Jobs";
$count=1;
$result=mysqli_query($conn,$sel);
?>

    <div>
<h2>Avalable Jobs</h2>
<hr>
<?php
$sel="SELECT * FROM KH_Jobs";
$count=1;
$result=mysqli_query($conn,$sel);
while($row=mysqli_fetch_assoc($result)){
?>
<div>
    <!-- job body -->
<h4><?php echo $row['Post'];?>  | Deadline: <?php echo $row['JDate']?> | <?php echo $row['JType']?></h4>
<?php
echo $row['JDescription'];
?>
<br>
Foward your CVs here<a href="">here.</a>
</div>
<hr>
<?php
$count++;
}
?>
    </div>
    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="footer__top__text">
                            <h2>Sign Up For Our Newsletter here.</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer__top__newslatter">
                            <form action="newsletter.php" method="post">
                                <input type="text" name="email" placeholder="Enter your email...">
                                <button type="submit" name="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Heri Plaza First Floor, Shop No.F03

                            Karen</p>
                        <ul>
                            <li>Kipusahome@gmail.com</li>
                            <li>+254 740 615 970</li>
                        </ul>
                        <div class="footer__social">
                            <a href="https://web.facebook.com/Kipusabeauty/?ref=page_internal"><i
                                    class="fa fa-facebook"></i></a>
                            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                            <a href="https://www.instagram.com/kipusahome/"><i class="fa fa-instagram"></i></a>
                            <!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Company</h6>
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <!-- <li><a href="#">Career</a></li> -->
                            <!-- <li><a href="#">FAQs</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Services</h6>
                        <ul>
                            <!-- <li><a href="services.php">Architecture</a></li> -->
                            <li><a href="services.php">Interior Design</a></li>
                            <li><a href="services.php">Exterior Design</a></li>
                            <li><a href="services.php">Office Design</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h6>Get In Touch</h6>
                        <p>Heri Plaza First Floor, Shop No.F03
                            <br>
                            Karen
                        </p>
                        <ul>
                            <li>Kipusahome@gmail.com</li>
                            <li>
                                <h4>+254 740 615 970</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="copyright__text">
                            <p>Copyright ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Verdant Technologies
                            </p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-5">
                    <div class="copyright__widget">
                        <a href="#">Terms of use</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                </div> -->
                </div>
            </div>
        </div>
    </footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>