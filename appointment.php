<?php
include "db.php";
$service = $_REQUEST['Service'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Kipusa Home Template">
    <meta name="keywords" content="Kipusa Home, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kipusa Home | Services</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo1.png" type="image/png">
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
            <!-- <a href="#"><img src="img/logo.png" alt=""></a> -->
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
                        <!-- <a href="#"><img src="img/logo.png" alt=""></a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="projects.php">Gallery</a></li>
                            <li class="active"><a href="services.php">Services</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="blog.php">Blog </a></li>
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
                        <h2><?php echo $service; ?></h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Services Section Begin -->
    <div class="row">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-10 col-md-10">
            <h1>Welcome to Kipusa Home</h1>
            <h3>Kipusa Home Process</h3>
            <br>
            Thank you for choosing Kipusa Homes for your design and upgrade needs. We are determined to create good, quality and relaxing spaces to the specification of the customer. To begin, fill out the form below.
            <br>A fee of Ksh. 10,000 will be charged as booking fee.
            <br>
            <br>
            1. Register in the form below.
            <br>
            2. We contact you and agree on the specifics for a meeting.
            <br>
            3. Meet at the scheduled meeting as we survey the grounds and brainstorm.
            <br>
            4. Fee is decided and work commences.
            <br>
            <br>
        </div>
        <div class="col-lg-1 col-md-1"></div>

    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3">
           
        <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $desc = $_POST['desc'];
                $phone = $_POST['phone'];
                $amount = '1';
                $Account_no = 'Kipusa Home';
                $insert = "INSERT INTO KH_Bookings(Name,Email,Phone,Description)values('$name','$email','$phone','$desc')";
                mysqli_query($conn, $insert);
                echo "Request Sent Succesfully.<br> You will be charged Ksh. 10,000 booking fee from your phone number. Kindly await the stk pop-up.";
                $url = 'https://tinypesa.com/api/v1/express/initialize';
                $data = array(
                    'amount' => $amount,
                    'msisdn' => $phone,
                    'account_no' => $Account_no
                );
                $headers = array(
                    'Content-Type: application/x-www-form-urlencoded',
                    'ApiKey: XsBGgEAxR6U' // Replace with your api key
                );
                $info = http_build_query($data);

                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                $resp = curl_exec($curl);
                $msg_resp = json_decode($resp);
            }
            ?>

        </div>
        <div class="col-lg-9 col-md-9">
            <div class="contact__form">
                <form action="appointment.php" method="POST">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <input type="text" name="name" placeholder="Name">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <input type="text" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div class="col-lg-12">
                            <textarea name="desc" placeholder="Message"></textarea>
                            <button type="submit" name="submit" class="site-btn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Counter Section End -->
    <section class="counter spad set-bg" data-setbg="img/counter-bg.jpg">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="count">50</h2>
                            </div>
                            <div class="counter__item__text">
                                <h5>Projects<br /> Completed</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="count">106</h2>
                            </div>
                            <div class="counter__item__text">
                                <h5>Happy<br /> Clients</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="count">12</h2>
                            </div>
                            <div class="counter__item__text">
                                <h5>Awards<br /> Received</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="count">78</h2>
                            </div>
                            <div class="counter__item__text">
                                <h5>Cups Of<br /> Coffee</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Client Section Begin -->

    <!-- Client Section End -->

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
                            <a href="https://web.facebook.com/Kipusabeauty/?ref=page_internal"><i class="fa fa-facebook"></i></a>
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
                            <!-- <li><a href="#">Our Works</a></li> -->
                            <!-- <li><a href="#">Career</a></li> -->
                            <!-- <li><a href="#">FAQs</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Services</h6>
                        <ul>
                            <li><a href="services.php">Architecture</a></li>
                            <li><a href="services.php">Interior Design</a></li>
                            <li><a href="services.php">Exterior Design</a></li>
                            <li><a href="services.php">Planning</a></li>
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
                            <p>Copyright © <script>
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