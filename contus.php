<?php

session_start();
$con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,'event');

    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $rno=$_POST['rno'];
        $query=$_POST['query'];

        $sql="insert into contactus (name, rollnumber, query) values('$name', '$rno', '$query')";
        $s=mysqli_query($con,$sql);
    
    }

?>