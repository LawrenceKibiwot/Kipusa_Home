<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kipusa Home | Gallery</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8">
                <div class="panel">
                    <div class="panel-header">
                        <h2>
                            Blog Inserter.
                        </h2>
                    </div>
                  <div class="contact__form">
                  <div class="panle-body">
                        <form action="" method="POST" class="contact__form">
                            <label>
                                Title:
                            </label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Blog Title">
                            <label>Date:</label>
                            <input type="date" class="form-control" name="date" placeholder="Enter date.">
                            <label>Content:</label>
                            <textarea name="content" cols="30" rows="19" class="form-control"></textarea>
                            <label>Image:</label>
                            <input type="file" class="form-control" placeholder="Enter File" name="file">
                            <button name="submit" type="submit">Post</button>
                        </form>

                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2"></div>
        </div>
    </div>
</body>

</html>