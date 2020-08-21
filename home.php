<?php include ('serverH.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Login_v3/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v3/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login_v3/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login_v3/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login_v3/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="Login_v3/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" Login_v3/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
   
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="Login_v3/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login_v3/css/util.css">
        <link rel="stylesheet" type="text/css" href="Login_v3/css/main.css">
    <!--===============================================================================================-->
    <title>study house</title>
</head>
<body>
    <div class="call" >

<!-- <h2 style="position: absolute;LEFT: 31PX;">Study house</h2> -->
<style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    .topnav {
      overflow: hidden;
      background-color: rgba(51, 51, 51, 0);
      position: absolute;
      width: 100%;
      margin-top: 27PX;
    }
    .logo{
        overflow: hidden;
    background-color: rgba(51, 51, 51, 0);
    position: absolute;
    /* width: 100%; */
    margin-top: 15PX;
    margin-left: 40PX;
    font-size: 110%;
    color: white;
    }
    
    .topnav a {
      float: right;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 82px;
      text-decoration: none;
      font-size: 17px;
    }
    
    .topnav a:hover {
      background-color: #e5d36f;
      color: black;
      border-radius: 47px;
    }
    
    .topnav a.active {
      background-color: #e5d36f;
      color: black;
      border-radius: 47px;
      width: 11%;
    }
    
    .topnav .icon {
      display: none;
    }
    
    @media screen and (max-width: 1800px) {
      .topnav a:not(:first-child) {display: none;}
      .topnav a.icon {
        float: right;
        color: rgb(255, 255, 255);
        display: block;
        padding: 13PX;
      }
      .topnav {
     
      margin-top: 0PX;
    }
    }
    @media screen and (max-width: 948px) {
      
        .topnav {
      overflow: hidden;
      background-color: #305858;
     
    }
    }
    @media screen and (max-width: 1086px) {
      .logo{
        overflow: hidden;
    background-color: rgba(51, 51, 51, 0);
    position: absolute;
    /* width: 100%; */
    margin-top: 15PX;
    margin-left: 40PX;
    font-size: 110%;
    color: white;
    }
  
  }
    
    @media screen and (max-width: 1800px) {
        .logo{
            display: none;
        }
      .topnav.responsive {position: relative;
     background-color: #305858;
    
    }
      .topnav.responsive .icon {
        position: absolute;
       
       
      }
      .topnav a:hover {
      background-color: #d76fe500;
      color: black;
      border-radius: 47px;
    }
      .topnav.responsive a {
        float: none;
        display: block;
       
      }
      
      .topnav a.active {
      background-color:rgba(255, 255, 255, 0);
      color: white;
      border-radius: 47px;
      width: 11%;
    }
    }
    </style>
    </head>
    <body>
        <div class="logo">

            
        </div>  
   
    <div class="topnav" id="myTopnav"> <h2 class="logo" href="#">Study House</h2>
        
    <a href ="home.php?logout='1'"><i class="fa fa-sign-out" aria-hidden="true"></i> </a>
      <!-- <a href="Login_v3/index.html">News</a> -->
      <a  href="#" id="myBtn"><?php  
            
            // if( isset($_SESSION['username'])){
            //     echo$_SESSION['username'];

                
            //   } 
            //   else ( isset($_SESSION['nameM'])){
            //     echo $_SESSION['nameM'];

                
            //   }

             
              if (isset($_SESSION['username'])):
                  echo $_SESSION['username'];
                  elseif (isset($_SESSION['Adminname'])):
                    echo $_SESSION['Adminname'];    
              
                  
              else:
                  echo "Login";
              endif;
              

            
            ?>



      </a>
      <a href="list.html" id="myBtn1">property</a>
       <a href="#home" >Home</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    
    
    
    <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
  




    <div class="C1">
<!-- <nav>
    <h2>Study house</h2>
</nav> -->
        <!-- <img src="home.jpg"> -->
        <div class="TXT">
<h1> study house</h1>
<h3>College Renting Made Simple</h3>
<p>Be one of the millions of students taking advantage of Afito's easy-to-use renting and leasing platform
</p>
        </div>
    </div>
    
</div>
    <div class="title1">

         <div class="title2">
            Popular Schools
 <div class="line1">
             
         </div>
         </div>
        
    </div>
    <style>
        .flex-container {
          display: flex;
          justify-content: center;
          background-color: none;
          flex-wrap: wrap;
        }
        
        .flex-container > div {
           /* background-image: url(ss.jpg); */
    width: 284px;
    margin: 10px;
    height: 355Px;
    text-align: center;
    border-radius: 22PX;
    line-height: 75px;
    font-size: 30px;
        }
        </style>
       
        
        <div class="flex-container">
          <div style="background-image: url(img/SS.JPG);"><h3 style="    margin-top: 256PX;
            COLOR: aliceblue;">Utah State University</h3> <p style="
    color: aliceblue;
    margin-top: -8PX;
">77 active listings</p></div>
          <div  style="background-image: url(img/cschool3.JPG);"><h3 style="    margin-top: 256PX;
            COLOR: aliceblue;">Utah State University</h3> <p style="
    color: aliceblue;
    margin-top: -8PX;
">77 active listings</p></div>
          <div  style="background-image: url(img/kk.JPG);"><h3 style="    margin-top: 256PX;
            COLOR: aliceblue;">Utah State University</h3> <p style="
    color: aliceblue;
    margin-top: -8PX;
">77 active listings</p></div>  
           <div  style="background-image: url(img/hh.JPG);"><h3 style="    margin-top: 256PX;
            COLOR: aliceblue;">Utah State University</h3> <p style="
    color: aliceblue;
    margin-top: -8PX;
">77 active listings</p></div> 
        </div>

<style>
.flex-container1 {
    display: flex;
    MARGIN-TOP: 7%;
    justify-content: center;
    HEIGHT: auto;
    /* background-color: #f7f7ed; */
    background-image: url(img/ED.JPG);
    flex-wrap: wrap;
  
}

.flex-container1 > div {
    width: 284px;
    margin: 75px;
    height: 350px;
    text-align: center;
    border-radius: 22PX;
    background-color:rgba(165, 42, 42, 0) ;
    margin-top: 92PX;
    line-height: 45px;
    font-size: 30px;
        }

@media screen and (max-width: 1441px) {
    .flex-container1 {
    display: flex;
    MARGIN-TOP: 7%;
    justify-content: center;
    HEIGHT: auto;
    background-color: #f7f7ed;
    background-image:  none;
    flex-wrap: wrap;
  
}

}
</style>
</head>
<body>


<div class="flex-container1">
  <div><img src="img/person-booth-solid.png"> <h3 style="   
        COLOR: #dc3545;
    MARGIN-TOP: 28PX;
    font-size: 100%;
    FONT-FAMILY: inherit;">Find Your Place</h3> <p style="
    FONT-FAMILY: none;
    FONT-SIZE: 72%;
">Browse hand-picked student rentals to find somewhere you'll love.</p></div>
  <div><img src="img/school-solid.png">
    <h3 style="   
        COLOR: #dc3545;
    MARGIN-TOP: 14PX;
    font-size: 100%;
    FONT-FAMILY: inherit;">Pick Your School</h3> <p style="
    FONT-FAMILY: none;
    FONT-SIZE: 72%;
">Enter your school in the search bar above to find listings near your campus.</p>

</div>
  <div ><img src="baa614659f3b3c97da49a29831931fda.png"> 
    <h3 style="   
    COLOR: #dc3545;
MARGIN-TOP: 14PX;
font-size: 100%;
FONT-FAMILY: inherit;">Utah State University</h3> <p style="
FONT-FAMILY: none;
FONT-SIZE: 72%;
">Browse hand-picked student rentals to find somewhere.</p></div>  
  
</div>

<div class="title1">

    <div class="title2">
        How it works
<div class="line1">
        
    </div>
    </div>
   
</div>
<style>
    .flex-container3 {
      display: flex;
      justify-content: center;
    
      flex-wrap: wrap;
      
    }
    
    .flex-container3 > div {
        /* background-image: url(OPO.png); */
    width: 689px;
    margin: 10px;
    border-radius: 22PX;
    HEIGHT: 372PX;
    text-align: center;
    line-height: 55px;
    font-size: 30px;
}
    </style>
  
  
    
    <div class="flex-container3">
      <div  style="background-image: url(img/IO.PNG);"> <div class="tag">#landlords</div> <h3 style="   
      COLOR: #ffffff;
    MARGIN-TOP: 23%;
    font-size: 100%;
    text-align: initial;
    margin-left: 21px;
    FONT-FAMILY: inherit;">How to Get the Most Out of <BR>
Your Afito</h3> <p style="
 FONT-FAMILY: none;
    text-align: initial;
    color: aliceblue;
    line-height: normal;
    FONT-SIZE: 98%;
    margin-left: 24px;
">77 active listings</p> </div>
      <div  style="background-image: url(img/OPO.PNG);"><div class="tag">#landlords</div>
      <h3 style="   
         COLOR: #ffffff;
    MARGIN-TOP: 23%;
    font-size: 100%;
    text-align: initial;
    margin-left: 21px;
    FONT-FAMILY: inherit;">3 Things You Need to Know 
BeforeSigning a Lease for 
an Apartment</h3> <p style="
   FONT-FAMILY: none;
      text-align: initial;
      color: aliceblue;
      line-height: normal;
      FONT-SIZE: 98%;
      margin-left: 24px;
  ">77 active listings</p></div>
      
    </div>

    <style>
        .flex-container4 {
          display: flex;
          justify-content: center;
          
          flex-wrap: wrap;
          
        }
        
        .flex-container4 > div {
            background-color: #f1f1f1;
    width: 449px;
    margin: 10px;
    height: 499PX;
    text-align: center;
    BORDER-RADIUS: 49PX;
    line-height: 75px;
    font-size: 30px;
        }
        </style>
      
        
        <div class="flex-container4">
          <div style="background-image: url(img/TTY.PNG);"> <img style="width: 46%;
            margin-top: 5%;" src="img/home-solid.png">  
            <h3 style="   
            COLOR: #ffffff;
    MARGIN-TOP: 28PX;
    font-size: 148%;
    FONT-FAMILY: unset;">Home</h3> <p style="
    FONT-FAMILY: none;
    color: aliceblue;
    FONT-SIZE: 97%;
    line-height: normal;
    ">Our free and easy to use listing service is the perfect way to find student tenants.</p><button class="button" style="background-color:#e5d36f ;"> <snap style="FONT-SIZE: 131%;">learn more</snap>  </button></div>
          <div  style="background-image: url(img/RT.PNG);"><img style="width: 46%;
            margin-top: 5%;" src="img/graduation-cap-solid.png">
            <h3 style="   
           COLOR: #ffffff;
    MARGIN-TOP: 50PX;
    font-size: 148%;
    FONT-FAMILY: unset;">Students</h3> <p style="
    FONT-FAMILY: none;
    color: aliceblue;
    FONT-SIZE: 97%;
    line-height: normal;
    ">We’ve done the hard work for you - simply choose & discover where you’re living next year</p><button class="button" style="background-color:#305858 ;"> <snap style="FONT-SIZE: 131%;">learn more</snap>  </button></div>
          <div  style="background-image: url(img/LL.PNG);"><img style="width: 46%;
            margin-top: 5%;" src="img/user-friends-solid.png"><h3 style="   
            COLOR: #ffffff;
    MARGIN-TOP: 28PX;
    font-size: 148%;
    FONT-FAMILY: unset;">Need a Roommate?</h3> <p style="
    FONT-FAMILY: none;
    color: aliceblue;
    FONT-SIZE: 97%;
    line-height: normal;
">Let Afito find the perfect roommate for you and start saving on rental costs.</p> <button class="button"> <snap style="FONT-SIZE: 131%;">learn more</snap>  </button> </div>  
           
        </div>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            
            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              padding-top: 100px; /* Location of the box */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }
            
            /* Modal Content */
            .modal-content {
              position: relative;
              background-color: #fefefe;
              margin: auto;
              padding: 0;
              border: 1px solid #888;
              width: 80%;
              box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
              -webkit-animation-name: animatetop;
              -webkit-animation-duration: 0.4s;
              animation-name: animatetop;
              animation-duration: 0.4s
            }
            
            /* Add Animation */
            @-webkit-keyframes animatetop {
              from {top:-300px; opacity:0} 
              to {top:0; opacity:1}
            }
            
            @keyframes animatetop {
              from {top:-300px; opacity:0}
              to {top:0; opacity:1}
            }
            
            /* The Close Button */
            .close {
              color: white;
              float: right;
              font-size: 28px;
              font-weight: bold;
            }
            
            .close:hover,
            .close:focus {
              color: #000;
              text-decoration: none;
              cursor: pointer;
            }
            
            .modal-header {
              padding: 2px 16px;
              background-color: #5cb85c;
              color: white;
            }
            
            .modal-body {padding: 2px 16px;}
            
            .modal-footer {
              padding: 2px 16px;
              background-color: #5cb85c;
              color: white;
            }
            </style>
    

<!-- //////////////////////////////////////////////////////////////////SSS/////////////////////////// -->



<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  
    

  


    <div class="limiter">
    <div class="wrap-login100">
        <span class="close">&times;</span>
        <form method="POST" action="home.php"  class="login100-form validate-form">
        <?php include ('errors.php'); ?>
            <span class="login100-form-logo">
                <i class="fa fa-user" aria-hidden="true"></i>
            </span>

            <span class="login100-form-title p-b-34 p-t-27">
                Log in
                
            </span>

            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                <input class="input100" type="text" name="username" placeholder="Username">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input class="input100" type="password" name="password" placeholder="Password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>

            <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                <label class="label-checkbox100" for="ckb1">
                    Remember me
                </label>
            </div>

            <div class="container-login100-form-btn">
                <button  name="login" class="login100-form-btn">
                    Login
                </button>
            </div>

            <div class="text-center p-t-90">
                <a class="txt1" href="#" id="myBtn9">
                    Create an account
                </a><br>
                <a class="txt1" href="admin.php"  id="myBtn9">
                  account Admin
                </a>
               
        </form>
    </div>
</div>
</div>
<div id="dropDownSelect1"></div>
</div>
<div id="log1" class="modal">

    <div class="limiter">
        <div class="wrap-login100">
            <span id="span1" class="close">&times;</span>
            <form  method="POST" action="home.php" class="login100-form validate-form">
            <?php include ('errors.php'); ?>
                <span class="login100-form-logo">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
    
                <span class="login100-form-title p-b-34 p-t-27">
                    Log up
                </span>
    
                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username_1" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>
     <div class="wrap-input100 validate-input" data-validate="Enter password">
                  <input type="text" class="input100"  name="email"  placeholder="Your Email"/>
                    <span class="focus-input100" data-placeholder="&#xf15a;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password_1" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
               

                
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input type="text" name="password_2"class="input100" placeholder="Repeat your password"/>
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

               
    
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>
    
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="Register">
                        Login
                    </button>
                </div>
    
                <div class="text-center p-t-90">
                    <a class="txt1" href="#" id="myBtn10">
                        I am already member
                    </a>
                </div>
            </form>
        </div>
    </div>
    </div>
    
    
    <div id="dropDownSelect1"></div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }


  
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
     
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }



    ////////////log up 
    var modal1 = document.getElementById("log1");
    
    
    // Get the button that opens the modal
    // var btn1 = document.getElementById("myBtn1");
    
    // Get the <span> element that closes the modal
    var span1 = document.getElementById("span1");
    
    // // When the user clicks the button, open the modal 
    // btn1.onclick = function() {
        
    //   modal1.style.display = "block"
    
    // }
    
    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
      modal1.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event1) {
      if (event1.target == modal1) {
        modal1.style.display = "none";
      }
    }
    var btn2 = document.getElementById("myBtn9");
    btn2.onclick = function oo() {
        modal1.style.display = "block";
        modal.style.display = "none";
    }

    
    </script>
        <!-- Footer -->
<footer  class="page-footer font-small unique-color-dark" style="background-color: #f7f7eb;">


         
          <!-- Grid column -->
  
        
        <!-- Grid row-->
  
      
  
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5" style="    max-width: 1710px;
    PADDING-TOP: 28PX">
  
      <!-- Grid row -->
      <div class="row mt-3">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
  
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold" style="    FONT-SIZE: 220%;
          COLOR: #dc3545;"> Study House</h6>
          <h6 class="text-uppercase font-weight-bold" style="    FONT-SIZE: 167%;
          COLOR: #305858;">A better place for
            students.</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         
          <p>
            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fa fa-rss mr-3"  aria-hidden="true"></i> Blog</p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold" style="FONT-SIZE: 160%;
          COLOR: #305858;">Latest Listings</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p style="">
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!">The Village at Elam  <samp style="background-color: #e5d36f;
    color: white;   
    padding: 0PX 2PX;font-size: 80%;">New</samp> </a>
        <h6 style="
        FONT-SIZE: 92%;
        COLOR: BLACK;">Murfreesboro, Tennessee</h6>
          </p>
          <p style="">
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!">The Village at Elam  <samp style="background-color: #e5d36f;
    color: white;   
    padding: 0PX 2PX;font-size: 80%;">New</samp> </a>
        <h6 style="
        FONT-SIZE: 92%;
        COLOR: BLACK;">Murfreesboro, Tennessee</h6>
          </p>
          <p style="">
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!">The Village at Elam  <samp style="background-color: #e5d36f;
    color: white;   
    padding: 0PX 2PX;font-size: 80%;">New</samp> </a>
        <h6 style="
        FONT-SIZE: 92%;
        COLOR: BLACK;">Murfreesboro, Tennessee</h6>
          </p>
          <p style="">
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!">The Village at Elam  <samp style="background-color: #e5d36f;
    color: white;   
    padding: 0PX 2PX;font-size: 80%;">New</samp> </a>
        <h6 style="
        FONT-SIZE: 92%;
        COLOR: BLACK;">Murfreesboro, Tennessee</h6>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold" style="FONT-SIZE: 160%;
          COLOR: #305858;">Recent Searches</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p >
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!">University of Delaware </a>
          </p>
          <p >
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!">Rowan   <samp style="background-color: #e5d36f;
    color: white;   
    padding: 0PX 9PX;font-size: 80%;">Top Search</samp> </a>
          </p>
          <p >
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!">Rutgers University - Newark</a>
        
          </p>
          <p >
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!">SUNY - Cortland  <samp style="background-color: #e5d36f;
    color: white;   
    padding: 0PX 9PX; font-size: 80%;">Top Search</samp> </a>
        
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold" style="FONT-SIZE: 160%;
          COLOR: #305858;"> Recent Blog Posts</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p >
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!"> Should You Have a Pet at C.... <samp style="background-color: #e5d36f;
    color: white;   
    padding: 0PX 2PX;font-size: 80%;">New</samp>
 </a>
          </p>
          <p >
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!">Moving Out of State? Here's ...  </a>
          </p>
          
          <p >
            <a style="
            COLOR: #305858;
            FONT-SIZE: 122%;
        " href="#!">5 Reasons You Should Live Off..  </a>
        
          </p>
  
        </div>
  
      </div>
      <!-- Grid row -->
 
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div> -->
    <!-- Copyright -->
    <div class="container22">
  
        <!-- Grid row-->
        <div class="row" style="width: 100%; justify-content: center; PADDING-BOTTOM: 37PX;">
    
          <!-- Grid column -->
          <div class="col-md-12 py-5" style="DISPLAY: flex;
          JUSTIFY-CONTENT: center;
          FLEX-WRAP: wrap;">
            <div class="mb-5 flex-center">
                <div class="linef">
    
              <!-- Facebook -->
              <a class="fb-ic">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"style=" 
                color: #305858;"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x" style=" 
                color: #305858;"> </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"style=" 
                color: #305858;"> </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"style=" 
                color: #305858;"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"style=" 
                color: #305858;"> </i>
              </a>
              <!--Pinterest-->
              <a class="pin-ic">
                <i class="fab fa-pinterest fa-lg white-text fa-2x"style=" 
                color: #305858;"> </i>
              </a>
            </div>
          </div>
          <!-- Grid column -->
    
        </div>
        <!-- Grid row-->
     <div class="th" style="    margin-top: -25PX;">

        <ul style=" list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;">
            <li style="float: left; "><a style="display: block;
                color: #305858;
                border-right: 2PX solid #305858;
                text-align: center;
                padding: 16px;
                text-decoration: none;" href="#home">the Company
</a></li>
            <li style="float: left; "><a style="display: block;
                color: #305858;
                text-align: center;
                padding: 16px;
                text-decoration: none;" href="#home">Privacy Policy
</a></li>
            <li style="float: left; "><a style="display: block;
                color: #305858;
                border-left: 2PX solid #305858;
                text-align: center;
                padding: 16px;
                text-decoration: none;" href="#home">the Company
</a></li>
            
          </ul> 
          <div style="Display: flex;
          justify-content: center;
          color: #305858;
          margin-top: 18PX;"> @stayathome</div>
      </div> 
        
      
      </div>
     
     
  </footer>
  
  
</html>