<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Login_v3/css/main.css">
    <link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="media.css">
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

      



      <div class="contact-form">
			
		<div class="cont-form">
			<form class="contactform">
                    <p class="Nom">
                      <label for="author">Nom <span class="required">*</span></label>
                      <input type="text" required="required" size="30" value="" name="author" id="nom">
                    </p>
                      <p class="prenom">
                      <label for="author">Prénom <span class="required">*</span></label>
                      <input type="text" required="required" size="30" value="" name="author"  id="pren">
                    </p>
                    <p class="email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" value="" name="email" >
                    </p>
                     <p class="num">
                      <label for="num">Tel N° <span class="required">*</span></label>
                      <input type="text" required="required" aria-required="true" value="" name="num"  id="tel">
                    </p>
                    <p class="objet">
                      <label for="subject">Objet</label>
                      <input type="text" name="subject"  id="sub">
                    </p>
                    <p class="msg">
                      <label for="comment">Message</label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" style="border: solid 1PX rgb(255, 255, 255);" name="comment" placeholder="Votre Message.." ></textarea>
                    </p>
                    <p class="submit">
                      <input type="submit" value="Envoyer le message !" name="submit" onclick="validation()">
                    </p>
                  </form>
			
		</div>
		<div class="adress">
			<h2>Adresse:</h2>
			<p>
				Résidence Naourass, Boulevard Ibnabdellah, <br>	
				ville nouvelle,  <br>	
				Casablanca, Maroc <br>	
				Téléphone: (+212) 05 00 00 00 <br>	

			</p>
		<div class="carte">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4010.761060584502!2d-9.234847320796849!3d32.294800721719255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1578479577245!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			
		</div>
		</div>
		
	

	</div>




























      
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