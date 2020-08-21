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

    <nav class="navbar navbar-expand-lg navbar-light" style="BACKGROUND-COLOR: #305858;">
        <a class="navbar-brand" style="padding: 1PX 4%; color:#FFF;" href="#">Navbar</a>
        <button class="navbar-toggler" style=" color:#FFF;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span >  <i class="fa fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown" style="padding: 1PX 9%;" >
          <ul class="navbar-nav" style="text-align: center;" >
            <li class="nav-item ">
              <a class="nav-link " style="PADDING: 7PX 46PX; color:#FFF;"  href="home.html">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" style="PADDING: 7PX 46PX; color:#FFF;"  id="myBtn1" >property</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="PADDING: 7PX 46PX; color:#FFF;"   href="#" id="myBtn">login</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"  style="color:#FFF;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                dropdown
              </a>
              <div class="dropdown-menu" style="background-color: #305858;" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" style="color:#FFF;" href="#">Action</a>
                <a class="dropdown-item" style="color:#FFF;" href="#">Another action</a>
                <a class="dropdown-item" style="color:#FFF;" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <style> 
        .navbar-nav { 
            margin-left: auto; 
        } 
        .nav-item a:hover {
      background-color: #e5d36f;
      color: black !important;
      border-radius: 47px;
    }
    .active, .nav-link:hover {
        background-color: #e5d36f;
      color: black !important;
      border-radius: 47px;
}
 
    </style> 

<div id="slideshow-wrap">
    <input type="radio" id="button-1" name="controls" checked="checked"/>
    <label for="button-1"></label>
    <input type="radio" id="button-2" name="controls"/>
    <label for="button-2"></label>
    <input type="radio" id="button-3" name="controls"/>
    <label for="button-3"></label>
    <input type="radio" id="button-4" name="controls"/>
    <label for="button-4"></label>
    <input type="radio" id="button-5" name="controls"/>
    <label for="button-5"></label>
    <label for="button-1" class="arrows" id="arrow-1">></label>
    <!-- <label for="button-2" class="arrows" id="arrow-2">></label> -->
    <label for="button-3" class="arrows" id="arrow-3">></label>
    <label for="button-4" class="arrows" id="arrow-4">></label>
    <label for="button-5" class="arrows" id="arrow-5">></label>
    <div id="slideshow-inner">
        <ul>
            <li id="slide1">
                <img src="img/house-week-lighthouse-inside_261806-840x450.jpg" />
                <div class="description">
                    <input type="checkbox" id="show-description-1"/>
                    <label for="show-description-1" class="show-description-label">I</label>
                    <div class="description-text">
                        <h2>Flower power</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                    </div>
                </div>
            </li>
            <li id="slide2">
                <img src="img/B3-DM067_RIGHTS_IM_20190319162958.jpg" />
                <div class="description">
                    <input type="checkbox" id="show-description-2"/>
                    <label for="show-description-2" class="show-description-label">I</label>
                    <div class="description-text">
                        <h2>Golden sunset</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                    </div>
                </div>
            </li>
            <li id="slide3">
                <img src="img/house-week-lighthouse-inside_261806-840x450.jpg" />
                <div class="description">
                    <input type="checkbox" id="show-description-3"/>
                    <label for="show-description-3" class="show-description-label">I</label>
                    <div class="description-text">
                        <h2>Flower power again</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                    </div>
                </div>
            </li>
            <li id="slide4">
                <img src="img/B3-DM067_RIGHTS_IM_20190319162958.jpg" />
                <div class="description">
                    <input type="checkbox" id="show-description-4"/>
                    <label for="show-description-4" class="show-description-label">I</label>
                    <div class="description-text">
                        <h2>Stormy coast</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                    </div>
                </div>
            </li>
            <li id="slide5">
               <img src="img/house-week-lighthouse-inside_261806-840x450.jpg" />
                <div class="description">
                    <input type="checkbox" id="show-description-5"/>
                    <label for="show-description-5" class="show-description-label">I</label>
                    <div class="description-text">
                        <h2>Splash!</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<style>
    @font-face {
    font-family: 'WebSymbolsRegular';
    src: url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.eot');
    src: url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.eot?#iefix') format('embedded-opentype'), url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.woff') format('woff'), url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.ttf') format('truetype'), url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont#WebSymbolsRegular') format('svg');
}

@import url(https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700);

* {
    margin: 0;
    padding: 0;
}



h1 { color: white }

#slideshow-wrap {
    display: block;
    height: auto;
    min-width: 260px;
    max-width: 1000px;
    margin: auto;
   
    -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,.8);
    -moz-box-shadow: 0px 0px 5px rgba(0,0,0,.8);
    box-shadow: 0px 0px 5px rgba(0,0,0,.8);
    margin-top: 20px;
    position: relative;
}

#slideshow-inner {
    width: 100%;
    height: 100%;
    background-color: rgb(0,0,0);
    overflow: hidden;
    position: relative;
}

#slideshow-inner>ul {
    list-style: none;
    height: 100%;
    width: 500%;
    overflow: hidden;
    position: relative;
    left: 0px;
    -webkit-transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
    -moz-transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
    -o-transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
    transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
}

#slideshow-inner>ul>li {
    width: 20%;
    height: auto;
    float: left;
    position: relative;
}

#slideshow-inner>ul>li>img {
    margin: auto;
    height: 100%;
    width: 100%;
}

#slideshow-wrap input[type=radio] {
    position: absolute;
    left: 50%;
    bottom: 15px;
    z-index: 100;
    visibility: hidden;
}

#slideshow-wrap label:not(.arrows):not(.show-description-label) {
    position: absolute;
    left: 50%;
    bottom: -45px;
    z-index: 100;
    width: 12px;
    height: 12px;
    background-color: rgba(200,200,200,1);
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    cursor: pointer;
    -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,.8);
    -moz-box-shadow: 0px 0px 3px rgba(0,0,0,.8);
    box-shadow: 0px 0px 3px rgba(0,0,0,.8);
    -webkit-transition: background-color .2s;
    -moz-transition: background-color .2s;
    -o-transition: background-color .2s;
    transition: background-color .2s;
}

#slideshow-wrap label:not(.arrows):active { bottom: -46px }

#slideshow-wrap input[type=radio]#button-1:checked~label[for=button-1] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-2:checked~label[for=button-2] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-3:checked~label[for=button-3] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-4:checked~label[for=button-4] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-5:checked~label[for=button-5] { background-color: rgba(100,100,100,1) }

#slideshow-wrap label[for=button-1] { margin-left: -36px }

#slideshow-wrap label[for=button-2] { margin-left: -18px }

#slideshow-wrap label[for=button-4] { margin-left: 18px }

#slideshow-wrap label[for=button-5] { margin-left: 36px }

#slideshow-wrap input[type=radio]#button-1:checked~#slideshow-inner>ul { left: 0 }

#slideshow-wrap input[type=radio]#button-2:checked~#slideshow-inner>ul { left: -100% }

#slideshow-wrap input[type=radio]#button-3:checked~#slideshow-inner>ul { left: -200% }

#slideshow-wrap input[type=radio]#button-4:checked~#slideshow-inner>ul { left: -300% }

#slideshow-wrap input[type=radio]#button-5:checked~#slideshow-inner>ul { left: -400% }

label.arrows {
    font-family: 'WebSymbolsRegular';
    font-size: 25px;
    color: rgb(255,255,240);
    position: absolute;
    top: 50%;
    margin-top: -25px;
    display: none;
    opacity: 0.7;
    cursor: pointer;
    z-index: 1000;
    background-color: transparent;
    -webkit-transition: opacity .2s;
    -moz-transition: opacity .2s;
    -o-transition: opacity .2s;
    transition: opacity .2s;
    text-shadow: 0px 0px 3px rgba(0,0,0,.8);
}

label.arrows:hover { opacity: 1 }

label.arrows:active { margin-top: -23px }

input[type=radio]#button-1:checked~.arrows#arrow-2, input[type=radio]#button-2:checked~.arrows#arrow-3, input[type=radio]#button-3:checked~.arrows#arrow-4, input[type=radio]#button-4:checked~.arrows#arrow-5 {
    right: -55px;
    display: block;
}

input[type=radio]#button-2:checked~.arrows#arrow-1, input[type=radio]#button-3:checked~.arrows#arrow-2, input[type=radio]#button-4:checked~.arrows#arrow-3, input[type=radio]#button-5:checked~.arrows#arrow-4 {
    left: -55px;
    display: block;
    -webkit-transform: scaleX(-1);
    -moz-transform: scaleX(-1);
    -ms-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    transform: scaleX(-1);
}

input[type=radio]#button-2:checked~.arrows#arrow-1 { left: -19px }

input[type=radio]#button-3:checked~.arrows#arrow-2 { left: -37px }

input[type=radio]#button-5:checked~.arrows#arrow-4 { left: -73px }

.description {
    position: absolute;
    top: 0;
    left: 0;
    width: 260px;
    font-family: 'Yanone Kaffeesatz';
    z-index: 1000;
}

.description input { visibility: hidden }

.description label {
    font-family: 'WebSymbolsRegular';
    background-color: rgba(255,255,240,1);
    position: relative;
    left: -17px;
    top: 00px;
    width: 40px;
    height: 27px;
    display: inline-block;
    text-align: center;
    padding-top: 7px;
    border-bottom-right-radius: 15px;
    cursor: pointer;
    opacity: 0;
    -webkit-transition: opacity .2s;
    -moz-transition: opacity .2s;
    -o-transition: opacity .2s;
    transition: opacity .2s;
    z-index: 5;
    color: rgb(20,20,20);
}

#slideshow-inner>ul>li:hover .description label { opacity: 1 }

.description input[type=checkbox]:checked~label { opacity: 1 }

.description .description-text {
    background-color: rgba(255,255,230,.5);
    padding-left: 45px;
    padding-top: 25px;
    padding-right: 15px;
    padding-bottom: 15px;
    position: relative;
    top: -35px;
    z-index: 4;
    opacity: 0;
    -webkit-transition: opacity .2s;
    -moz-transition: opacity .2s;
    -o-transition: opacity .2s;
    transition: opacity .2s;
    color: rgb(20,20,20);
}

.description input[type=checkbox]:checked~.description-text { opacity: 1 }
</style>
<style>
    .flex-container88 {
      display: flex;
      justify-content: center;
      background-color: none;
      flex-wrap: wrap;
      margin-top: 74PX;
    }
    
    .flex-container88 > div {
       /* background-image: url(ss.jpg); */
width: 284px;
margin: 10px;
height: 252Px;
border: #e5d36f 3PX solid;
text-align: center;
line-height: 75px;
font-size: 30px;

    }
    </style>
   
    
    <div class="flex-container88">
      <div>  <i style="    FONT-SIZE: 371%;" class="fa fa-user" aria-hidden="true"></i> <h3 style="margin-top: 2PX; COLOR: rgb(0, 0, 0);">BadRooom</h3>
        <p style="color: rgb(0, 0, 0);">7</p></div>

     
                      <div>  <i style="    FONT-SIZE: 371%;" class="fa fa-user" aria-hidden="true"></i> <h3 style="margin-top: 2PX; COLOR: rgb(0, 0, 0);">BadRooom</h3>
                  <p style="color: rgb(0, 0, 0);">7</p></div>


     <div>  <i style="    FONT-SIZE: 371%;" class="fa fa-user" aria-hidden="true"></i> <h3 style="margin-top: 2PX; COLOR: rgb(0, 0, 0);">BadRooom</h3>
         <p style="color: rgb(0, 0, 0);">7</p></div>  
      


                      <div>  <i style="    FONT-SIZE: 371%;" class="fa fa-user" aria-hidden="true"></i> <h3 style="margin-top: 2PX; COLOR: rgb(0, 0, 0);">BadRooom</h3>
                   <p style="color: rgb(0, 0, 0);">7</p></div>
    </div>



    <style>
        .flex-container21 {
            display: flex;
    background-color: #F7F7EB;
    flex-wrap: wrap;
    JUSTIFY-CONTENT: center;
    WIDTH: 64%;
    MARGIN-LEFT: 18%;
          
        }
        
        .flex-container21 > div {
         
          width: 30x;
          margin: 24px 33PX;
          display: flex;
          align-items: center;
          font-size: 30px;
        }
        .img21 {
          border-radius: 50%;
        }
        .button1 {
          background-color: brown;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
        </style>
        
        
        <div class="flex-container21">
          <div><img class="img21" src="img/img_avatar.png" alt="Avatar" style="width:90px"> </div>
          <div> Ibrahim hajiri</div>
          <div><button class="button1">Contact Property</button></div>
          
        </div>
        <div class="dec"style="    MARGIN-LEFT: 18%;
        margin-top: 33PX;" >
                
            <h2>Description</h2>
            <p style="width: 78%;">
                Renovations to be made June 1 - 15: - Entire house painted - Complete Clean/Disinfect of all rooms and bathrooms - All carpet ripped up - entire house will be hardwood floors Lease will be from June 1 - May 31, 2021. Month of June = Free Rent. Renovations the first 2 weeks and move-in mid-June. Only pay for 11 months of rent for a 1-year lease. Walking distance to: College Ave, Downtown New Brunswick, Easton Ave. Looking for group of students. 1st floor has 1 double room, kitchen, full bathroom, living room; 2nd floor has 3 double rooms and 1 single room and full bathroom, large high-ceiling attic as well as a basement. Great place, great location! Large driveway (2-3 cars). Plenty of on-street parking (parking permits). Washer and dryer in the basement.
            </p>
             
        </div>
        <div class="dec"style="    MARGIN-LEFT: 18%;
        margin-top: 33PX;"> 

        </div>



        <style>
            /* Set the size of the div element that contains the map */
           #map {
             height: 400px;  /* The height is 400 pixels */
             width: 100%;  /* The width is the width of the web page */
            }
         </style>
        <div id="map"><iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53963.18230093005!2d-9.27171220280818!3d32.29307251680865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!2sSafi!5e0!3m2!1sfr!2sma!4v1596559191187!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
 -->




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

</body>