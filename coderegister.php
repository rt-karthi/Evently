<?php
session_start();
$con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,'event');

    if(isset($_POST['submit']))
    {

        $part1=$_POST['participant1'];
        $rno1=$_POST['rollno1'];
        $part2=$_POST['participant2'];
        $rno2=$_POST['rollno2'];
        $shift=$_POST['shift'];
        $class=$_POST['class'];

        $sql="insert into webdesign (participant1,rollno1,participant2,rollno2,shift,class) 
                              values('$part1', '$rno1', '$part2','$rno2', '$shift', '$class')";
        $s=mysqli_query($con,$sql);

        echo "<script> alert('registered successfully'); </script>";
        header('location:index.html');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Blaster registration</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap"rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anton&display=swap">
    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    
    <style>
      .gooey {
     position: absolute;
     top: 50%;
     left: 50%;
     width: 142px;
     height: 40px;
     margin: -20px 0 0 -71px;
     background: #fff;
     filter: contrast(20);
   }
   .gooey .dot {
     position: absolute;
     width: 16px;
     height: 16px;
     top: 12px;
     left: 15px;
     filter: blur(4px);
     background: #000;
     border-radius: 50%;
     transform: translateX(0);
     animation: dot 2.8s infinite;
   }
   .gooey .dots {
     transform: translateX(0);
     margin-top: 12px;
     margin-left: 31px;
     animation: dots 2.8s infinite;
   }
   .gooey .dots span {
     display: block;
     float: left;
     width: 16px;
     height: 16px;
     margin-left: 16px;
     filter: blur(4px);
     background: #000;
     border-radius: 50%;
   }
   @-moz-keyframes dot {
     50% {
       transform: translateX(96px);
     }
   }
   @-webkit-keyframes dot {
     50% {
       transform: translateX(96px);
     }
   }
   @-o-keyframes dot {
     50% {
       transform: translateX(96px);
     }
   }
   @keyframes dot {
     50% {
       transform: translateX(96px);
     }
   }
   @-moz-keyframes dots {
     50% {
       transform: translateX(-31px);
     }
   }
   @-webkit-keyframes dots {
     50% {
       transform: translateX(-31px);
     }
   }
   @-o-keyframes dots {
     50% {
       transform: translateX(-31px);
     }
   }
   @keyframes dots {
     50% {
       transform: translateX(-31px);
     }
   }
   
 
    section{
     background-color:#E0E5EC;
      /*background-color: #afd275;
       background-color: #ecf0f3; */
    }
    .card-body{
      /* box-shadow: 10px 10px 10px #beb9b9, -10px -10px 10px #ffffff; */
      border-radius: 12px;
      box-sizing: border-box;
      /* margin-top: 70px; */
      box-shadow: 9px 9px 16px rgb(163,177,198,0.6), -9px -9px 16px    rgba(255,255,255, 0.5);
      /* box-shadow: 12px 12px 16px 0 rgba(0, 0, 0, 0.25), -8px -8px 12px 0 rgba(255, 255, 255, 0.3);
      display: flex; */
    }
  
    .whole-content-active{
     visibility: visible;
    }
    .whole-content{
     visibility:hidden;
    }
    ul li:hover ul.dropdown-menu{
        font-size:1.2rem;
        display: block;
        background: hsl(206, 6%, 78%);
        color: white;
  }
   
  </style> 

</head>
<body>

<div class="whole-content" id="wholecontent">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          
          <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample" style="font-family: poppins; font-size: larger;">
           
            <ul class="navbar-nav mb-2 mb-lg-0 ">
              <li class="nav-item ">
                <a class="nav-link active px-lg-4" aria-current="page" href="index.html">Home</a>
              </li>
             
              
              <li class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle px-lg-4 active" href="techxtra_details.html" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                  Techxtra
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="pptregister.php">Paper Presentation</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="coderegister.php">Code blaster</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="quizregister.php">Mind Fizz</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="webregister.php">Web Crawler</a>
                  </li>
                </ul>
              </li>

               
               <li class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle px-lg-4 active" href="dhamaka_details.html" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                  Dhamaka
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="musiqueregister.php">Musique</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="charadesregister.php">Dumb Charades</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="couplingregister.php">Word Coupling</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="adsregister.php">Ad-Craze</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active px-lg-4" href="contactus.html">contact us</a>
              </li>
              <li class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle px-lg-4 active" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                  Event details
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="techxtra_details.html">Technical</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="dhamaka_details.html">Non-Technical</a>
                  </li>
                </ul>
              </li>

            </ul>           
          </div>          
        </div>        
      </nav>


       <!--form-->
  <section class="vh-200 gradient-custom">
    <div class="container py-5 h-170">
      <div class="row justify-content-center align-items-center h-130">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px; background-color:  #E0E5EC; ">
            <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Code Blaster Registration</h3>

            <form method="post" action="" id="register-form">

                <div class="row">
                  <p>First participant</p>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
        
                    <input type="text" name="participant1" class="form-control form-control-lg rounded-pill border"/>
                    <label class="form-label" for="Name">Name</label>
                    </div>      
                  </div>

                  <div class="col-md-6 mb-4">      
                    <div class="form-outline">
                    <input type="text" name="rollno1" class="form-control form-control-lg rounded-pill" />
                    <label class="form-label" for="Rollno">Roll Number</label>
                    </div>     
                  </div>
                </div>

                <div class="row">
                  <p>Second participant</p>
                  <div class="col-md-6 mb-4">     
                    <div class="form-outline ">
                   
                    <input type="text" name="participant2" class="form-control form-control-lg rounded-pill"/>
                    <label class="form-label" for="Name">Name</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4">     
                    <div class="form-outline">
                    <input type="text" name="rollno2" class="form-control form-control-lg rounded-pill border"/>
                    <label class="form-label" for="Rollno2">Roll Number</label>
                    </div>     
                  </div>
                </div>

                <div class="row"><div class="col-12">
                  <label class="form-label select-label">Shift</label> &nbsp;&nbsp;
                    <div class="btn-group">
                      <input type="radio" value="Shift 1" class="btn-check" name="shift" id="option1" autocomplete="off" checked />
                      <label class="btn btn-secondary" for="option1">Shift 1</label>
                
                      <input type="radio" value="Shift 2" class="btn-check" name="shift" id="option2" autocomplete="off" />
                  <label class="btn btn-secondary" for="option2">Shift 2</label>
                              
                </div>
              </div>
              </div>

                <br>

                <div class="row">
                <div class="col-12">
                    <label class="form-label select-label">Class</label>
                    <select name="class" class="select form-control-lg rounded-pill  border border-info" style="background-color: #f3f7fa;">
                    <option selected>Choose class</option>
                    <option value="I BCA - A">I BCA - A</option>
                    <option value="I BCA - B">I BCA - B</option>
                    <option value="II BCA - A">II BCA - A</option>
                    <option value="II BCA - B">II BCA - B</option>
                    <option value="III BCA - A">III BCA - A</option>
                    <option value="III BCA - B">III BCA - B</option>
                    <option value="I BBA (CA)">I BBA (CA)</option>
                    <option value="II BBA (CA)">II BBA (CA)</option>
                    <option value="III BBA (CA)">III BBA (CA)</option>
                    </select>     
                </div>
                </div>
                &nbsp;
           
                <div class="text-center">
                  <div class="mt-4 pt-2">
                     <input class="btn btn-lg btn-info btn-rounded" name="submit" type="submit" value="submit" style="width: 10rem;"/>
                  </div>
               </div>     
              </form> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr class="hr" />
      <div class="d-flex justify-content-center">
        <p>
        &copy;  Copyright <script>document.write(new Date().getFullYear());</script> All rights reserved | karthi_rt
        </p>
     </div>
  </section> 

 
</div>

<div class="gooey"id="loading">
  	<span class="dot"></span>
  	<div class="dots">
    	<span></span>
    	<span></span>
    	<span></span>
    </div>
  </div>



<script>
  const wholeContent = document.getElementById('wholecontent');
  const loading = document.getElementById('loading');

  const Loading = ()=>{
    const timer =setInterval(() => {
       loading.style.visibility="hidden";
    }, 2000);
    return ()=> clearInterval(timer);
  }

  Loading();
  setTimeout(() => {
    wholeContent.style.visibility="visible";
  },2000);


  </script>
            
    
</body>
</html>