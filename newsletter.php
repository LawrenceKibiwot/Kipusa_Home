<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $inserter="INSERT INTO KH_Newsletter(Email) values('$email')";
    mysqli_query($conn,$inserter);
    header("location:index.html");
}
?>