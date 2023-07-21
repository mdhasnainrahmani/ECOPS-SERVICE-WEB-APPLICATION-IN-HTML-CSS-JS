<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
  <head>
    <title>ecops</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0"><img src ="images\SAVE_20190303_151949.jpeg" height="56" width="50" alt= "hello"><strong>ECOPS</strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
			   
			   <!--<li class="active"><a href="index.php">Login</a></li>-->
                <li><a href="home_cops.php">Home</a></li>
				<li><a href="about_cops.php">About</a></li>
				
               
                  <li><a href="simple_services.php">Services</a><li>
                 
               <!-- <li class="has-children">
               <a href="#">Register</a>
			   <ul class="dropdown">
                    <li><a href="cops login/register_cops.php">Cops</a></li>
                    <li><a href="register.php">User</a></li>
                    <li><a href="#">View FIR</a></li>
                    <li><a href="#">Stolen/Recovered property</a></li>
                   <li><a href="#">Citizen Charter</a></li>-->
                 <!-- </ul>
                </li>
                <li><a href="contact_cops.php">Contact</a></li>-->
				<li><?php echo $_SESSION['name'];?></li>
				 <li> <a href="logout.php">Logout</a></li>
                  
                
               <!-- <li><a href="new-post.html"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Post a Job</span></a></li>-->
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

