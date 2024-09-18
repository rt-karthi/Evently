<?php
session_start();
$con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,'event');

    if(isset($_POST['submit'])){

        $rating=$_POST['rating'];
        $message=$_POST['message'];

        $sql="insert into feedback (rating, message) values('$rating', '$message')";
        $s=mysqli_query($con,$sql);

    }

?>