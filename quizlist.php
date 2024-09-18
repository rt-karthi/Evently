<?php

session_start();
if (!isset($_SESSION['username'])){
  header('location:admin.html');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mind fizz participant list</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--mdboostrap links-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

    <style>
      .col{
        margin-top:-100px;
      }
      </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

          <div class="d-flex">
            <a class="navbar-brand me-2" href="index.html">
               <i class="fa fa-home" aria-hidden="true" height="22" style="margin-top: -1px;"></i>
            </a>
         </div>  
 
          <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample" style="font-family: poppins; font-size: larger;">
           
            <ul class="navbar-nav mb-2 mb-lg-0 ">
              <li class="nav-item ">
                <a class="nav-link active px-lg-4" aria-current="page" href="shift12.html">Home</a>
              </li>
             
             
              <li class="nav-item">
                <a class="nav-link active px-lg-4" href="receivedus.php">contact us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active px-lg-4" href="receivedfeed.php">Feedback</a>
              </li>
            </ul>           
          </div>    

          <div class="d-flex">
            <a class="navbar-brand me-2" href="admin.html">
               <i class="fa fa-sign-out" aria-hidden="true" height="22" style="margin-top: -1px;"></i>
            </a>
         </div>      
        </div>        
      </nav>


      <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-2">
            <div class="card-header">
              <h2 class="display-5 text-center">MIND FIZZ (QUIZ)</h2>
              <!-- <h2 class="display-6 text-center">----------------------</h2> -->
            </div>
              <div class="card-body">
              <table class="table table-bordered text-center">
                <thead>
                  <tr class="bg-dark text-white">
                    <th>Name</th>
                    <th>Roll Number</th>
                    <th>Name</th>
                    <th>Roll Number</th>
                    <th>Shift</th>
                    <th>Class</th>                   
                  </tr>
                </thead>

                <tbody>
                  <?php 
                      // session_start();
                      // error_reporting(0);
                      $con=mysqli_connect('localhost','root','');
                      mysqli_select_db($con,'event');

                      if ($con-> connect_error) {
                        // code...
                        die("Connection failed:".$con-> connect_error);
                      }
                      $sql="select participant1, rollno1, participant2, rollno2, shift, class from quiz";
                      
                      $result=$con-> query($sql);

                      if ($result-> num_rows >0) {
                        // code...
                        while ($row=$result-> fetch_assoc()) {
                          // code...
                          echo" <tr>
                                <td>".$row["participant1"]."</td>
                                <td>".$row["rollno1"]."</td>
                                <td>".$row["participant2"]."</td>
                                <td>".$row["rollno2"]."</td>
                                <td>".$row["shift"]."</td>
                                <td>".$row["class"]."</td>                               
                                </tr> ";
                        }
                        echo"</table>";
                      }
                      else{
                        
                      }
                  ?>
		            </tbody>
                                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


    <hr class="hr" />
    <div class="d-flex justify-content-center">
      <p>
          &copy; Copyright&nbsp;&nbsp;<script>document.write(new Date().getFullYear());</script> All rights reserved | karthi_rt
      </p>
   </div>
    
</body>
</html>
