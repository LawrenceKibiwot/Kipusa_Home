<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
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
    <div class="container-fliud">
        <br>
        
        <br>
     <div class="row">
         <div class="col-lg-2 col-md-2"></div>
         <div class="col-lg-8 col-md-8">  
             <h2>Enter Job advert </h2>
              <div class="contact__form">
   <form action="job_updater.php" method="POST">
   <input type="text" name="position" placeholder="Enter Job Position">
    <br>
    <input type="date" name="deadline"  placeholder="Enter deadline" >
    <select name="type" id="" class="form-control">
        <option value="Part-Time">Part-Time</option>
        <option value="Internship">Internship</option>
        <option value="Full-Time">Full-Time</option>
    </select>
    <br>
    <textarea name="description" cols="70" rows="25" placeholder="Enter the Job description"></textarea>
    <button name="submit" type="submit">Submit</button>
   </form>
        </div></div>
        <div class="col-lg-2 col-md-2">
        <?php
        if(isset($_POST['submit'])){
            $post=$_POST['position'];
            $deadline=$_POST['deadline'];
            $desc=$_POST['description'];
            $type=$_POST['type'];
            $inserter="INSERT INTO KH_Jobs(Post,JDate,JDescription,JType) values('$post','$deadline','$desc','$type')";
            mysqli_query($conn,$inserter);
            header("location:job_updater.php");
        }
        ?>
        </div>
     </div>
    </div>
</body>
</html>