<?php
    include_once '../Model/Commande.php';
    include_once '../Controller/commandeC.php';
   
    $error = "";

    // create adherent
    $commande = NULL;

    // create an instance of the controller
    $commandeC = new CommandeC();
    if (
		isset($_POST["idCommande"]) &&
		isset($_POST["dateCommande"]) && 
        isset($_POST["etat"]) && 
        isset($_POST["nb_produits"]) &&
        isset($_POST["id_facture"])
    ) {
        if (
			!empty($_POST["idCommande"]) &&
			!empty($_POST["dateCommande"]) && 
            !empty($_POST["etat"]) && 
            !empty($_POST["nb_produits"])&&
            !empty($_POST["id_facture"])
        ) {
            $commande = new Commande(
				$_POST["idCommande"],
				$_POST["dateCommande"],
                $_POST["etat"],
                $_POST["nb_produits"],
                $_POST["id_facture"]
            );
            $commandeC->ajouterCommande($commande);
            header('Location:commande.php');
        }
        else
            $error = "Missing information";
    }

?>
 <!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Fast Saver</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="bootstrap.min.css">
      <!-- style css -->
     <!-- <link rel="stylesheet" href="mical-html/css/style.css">-->
      <!-- Responsive-->
      <!--<link rel="stylesheet" href="mical-html/css/responsive.css">-->
      <!-- fevicon -->
      <link rel="icon" href="mical-html/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="mical-html/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
         /*--------------------------------------------------------------------- File Name: responsive.css ---------------------------------------------------------------------*/


/*--------------------------------------------------------------------- File Name: style.css ---------------------------------------------------------------------*/


/*--------------------------------------------------------------------- import Fonts ---------------------------------------------------------------------*/

@import url('https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700');
@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
@import url('https://fonts.googleapis.com/css?family=Raleway:100,400,600,700,900&display=swap');

/*****---------------------------------------- 1) font-family: 'Rajdhani', sans-serif;
 2) font-family: 'Poppins', sans-serif;
 ----------------------------------------*****/


/*--------------------------------------------------------------------- import Files ---------------------------------------------------------------------*/

@import url(animate.min.css);
@import url(normalize.css);
@import url(icomoon.css);
@import url(font-awesome.min.css);
@import url(meanmenu.css);
@import url(owl.carousel.min.css);
@import url(swiper.min.css);
@import url(slick.css);
@import url(jquery.fancybox.min.css);
@import url(jquery-ui.css);
@import url(nice-select.css);

/*--------------------------------------------------------------------- skeleton ---------------------------------------------------------------------*/

* {
     box-sizing: border-box !important;
}

html {
     scroll-behavior: smooth;
}

body {
     color: #666666;
     font-size: 14px;
     font-family: 'Raleway', sans-serif;
     line-height: 1.80857;
     font-weight: normal;
}

a {
     color: #1f1f1f;
     text-decoration: none !important;
     outline: none !important;
     -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
     -ms-transition: all .3s ease-in-out;
     -o-transition: all .3s ease-in-out;
     transition: all .3s ease-in-out;
}

h1,
h2,
h3,
h4,
h5,
h6 {
     letter-spacing: 0;
     font-weight: normal;
     position: relative;
     padding: 0 0 10px 0;
     font-weight: normal;
     line-height: normal;
     color: #111111;
     margin: 0
}

h1 {
     font-size: 24px;
}

h2 {
     font-size: 22px;
}

h3 {
     font-size: 18px;
}

h4 {
     font-size: 16px
}

h5 {
     font-size: 14px
}

h6 {
     font-size: 13px
}

*,
*::after,
*::before {
     -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
     box-sizing: border-box;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
     color: #212121;
     text-decoration: none!important;
     opacity: 1
}

button:focus {
     outline: none;
}

ul,
li,
ol {
     margin: 0px;
     padding: 0px;
     list-style: none;
}

p {
     margin: 0px;
     font-weight: 500;
     font-size: 15px;
     line-height: 24px;
}

a {
     color: #222222;
     text-decoration: none;
     outline: none !important;
}

a,
.btn {
     text-decoration: none !important;
     outline: none !important;
     -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
     -ms-transition: all .3s ease-in-out;
     -o-transition: all .3s ease-in-out;
     transition: all .3s ease-in-out;
}

img {
     max-width: 100%;
     height: auto;
}

 :focus {
     outline: 0;
}

.btn-custom {
     margin-top: 20px;
     background-color: transparent !important;
     border: 2px solid #ddd;
     padding: 12px 40px;
     font-size: 16px;
}

.lead {
     font-size: 18px;
     line-height: 30px;
     color: #767676;
     margin: 0;
     padding: 0;
}

.form-control:focus {
     border-color: #ffffff !important;
     box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .25);
}

.navbar-form input {
     border: none !important;
}

.badge {
     font-weight: 500;
}

blockquote {
     margin: 20px 0 20px;
     padding: 30px;
}

button {
     border: 0;
     margin: 0;
     padding: 0;
     cursor: pointer;
}

.full {
     float: left;
     width: 100%;
}

.layout_padding {
     padding-top: 90px;
     padding-bottom: 90px;
}

.layout_padding_2 {
     padding-top: 75px;
     padding-bottom: 75px;
}

.light_silver {
     background: #f9f9f9;
}

.theme_bg {
     background: #38c8a8;
}

.margin_top_30 {
     margin-top: 30px !important;
}

.full {
     width: 100%;
     float: left;
     margin: 0;
     padding: 0;
}


/**-- heading section --**/


/*---------------------------- preloader area ----------------------------*/

.loader_bg {
     position: fixed;
     z-index: 9999999;
     background: #fff;
     width: 100%;
     height: 100%;
}

.loader {
     height: 100%;
     width: 100%;
     position: absolute;
     left: 0;
     top: 0;
     display: flex;
     justify-content: center;
     align-items: center;
}

.loader img {
     width: 280px;
}

ul.btn {
     float: right;
}

ul.btn li {
     display: inline-block;
     padding: 0 25px;
}

ul.btn li a {
     color: #fff;
     font-size: 16px;
}

ul.btn li:last-child {
     padding-right: 0;
}

.login_btn {
     padding-left: 50px;
}

.login_btn a {
     background-color: #fff;
     display: inline-block;
     padding: 7px 35px;
     border-radius: 10px;
     color: #292e39 !important;
     font-size: 17px;
}

.login_btn a:hover {
     color: #fff !important;
     background: #0808ff;
}


/*-- header area --*/


/*--------------------------------------------------------------------- top banner area ---------------------------------------------------------------------*/


/*--------------------------------------------------------------------- layout new css ---------------------------------------------------------------------*/


/*-- navigation--*/

.navigation.navbar {
     float: right;
     padding-top: 17px;
}

.navigation.navbar-dark .navbar-nav .nav-link {
     padding: 0 25px;
     color: #fff;
     font-size: 17px;
     line-height: 20px;
     font-weight: 600;
}

.navigation.navbar-dark .navbar-nav .nav-link:focus,
.navigation.navbar-dark .navbar-nav .nav-link:hover {
     color: #51fe44;
}

.navigation.navbar-dark .navbar-nav .active>.nav-link,
.navigation.navbar-dark .navbar-nav .nav-link.active,
.navigation.navbar-dark .navbar-nav .nav-link.show,
.navigation.navbar-dark .navbar-nav .show>.nav-link {
     color: #51fe44;
}

.navbar-expand-md .navbar-nav {
     padding-right: 10px;
}

.padd_right {
     padding-right: 10px;
}

.sign_btn {
     padding-left: 50px;
}

.sign_btn a {
     display: inline-block;
     padding: 7px 10px;
     color: #fff;
     font-size: 17px;
}

.sign_btn a:hover {
     color: #fff;
}

.header {
     width: 100%;
     padding: 20px 30px;
     border-bottom: #000 solid 20px;
     background-image: linear-gradient(to bottom, #1559b7, #4f7af3);
}

.logo a {
     font-size: 40px;
     font-weight: bold;
     text-transform: uppercase;
     color: #fff;
     line-height: 40px;
}


/** banner section **/

.banner_main {
     background: url(../images/banner.jpg);
     background-repeat: no-repeat;
     min-height: 700px;
     background-size: 100% 100%;
     display: flex;
     justify-content: center;
     align-content: center;
     align-items: center;
}

.text-bg {
     text-align: left;
     padding-left: 50px;
}

.text-bg h1 {
     text-transform: uppercase;
     color: #51fe44;
     font-size: 90px;
     line-height: 80px;
     padding-bottom: 35px;
     font-weight: bold;
}

.text-bg span {
     text-transform: uppercase;
     color: #fff;
     font-size: 51px;
     line-height: 68px;
     font-weight: 700;
     padding-bottom: 20px;
     display: block;
}

.text-bg p {
     line-height: 28px;
     font-weight: 500;
     padding-bottom: 20px;
     display: block;
}

.text-bg figure img {
     width: 100%;
     padding-top: 70px;
     padding-left: 40px;
}

.text_img figure {
     margin: 0;
}

.text_img figure img {
     width: 100%;
}

.carousel-caption {
     position: inherit;
}

#banner1 .carousel-indicators {
     display: none;
}

.carousel-control-prev {
     left: inherit;
     right: 17%;
}

.carousel-control-next {
     right: 12%;
}

#banner1 a.carousel-control-next,
#banner1 a.carousel-control-prev {
     opacity: 1;
     top: 100%;
}

#banner1 .carousel-control-next i,
#banner1 .carousel-control-prev i {
     width: 50px;
     height: 50px;
     border-radius: 30px;
     background: #fff;
     opacity: 1;
     display: flex;
     align-items: center;
     justify-content: center;
     color: #000;
}

#banner1 .carousel-control-next i:focus,
#banner1 .carousel-control-next i:hover,
#banner1 .carousel-control-prev i:focus,
#banner1 .carousel-control-prev i:hover {
     background: #2f2c2c;
     color: #fff;
}

.text-bg a {
     text-transform: uppercase;
     font-size: 17px;
     background-color: #fff;
     color: #000;
     font-weight: 600;
     padding: 13px 0px;
     width: 100%;
     max-width: 190px;
     text-align: center;
     display: inline-block;
     transition: ease-in all 0.5s;
     margin-right: 10px;
}

.text-bg a:hover {
     background-color: #292e39;
     color: #fff;
     transition: ease-in all 0.5s;
}


/** end banner section **/

.titlepage {
     text-align: center;
     padding-bottom: 60px;
}

.titlepage h2 {
     font-size: 35px;
     color: #090807;
     line-height: 55px;
     font-weight: bold;
     padding: 0;
     border-bottom: #0556c4 solid 1px;
     max-width: 300px;
     margin: auto;
}

.d_flex {
     display: flex;
     align-items: center;
     flex-wrap: wrap;
}

.blu {
     color: #0808ff;
}

.read_more {
     font-size: 17px;
     background-color: #141629;
     color: #fff !important;
     padding: 13px 0px;
     width: 100%;
     max-width: 190px;
     text-align: center;
     display: inline-block;
     transition: ease-in all 0.5s;
     border-radius: 30px;
     font-weight: 500;
}

.read_more:hover {
     background: #51fe44;
     color: #fff;
     transition: ease-in all 0.5s;
}


/** three_box section **/

.three_box {
     padding: 0 40px;
}

.box_text {
     background: #fff;
     text-align: center;
     padding: 50px 20px 20px 20px;
     margin-top: -80px;
     box-shadow: #ddd 0px 0px 14px -6px;
}

.box_text h3 {
     color: #121010;
     font-size: 18px;
     font-weight: 600;
}

.box_text p {
     font-size: 17px;
}

.box_text i {
     padding: 6px 0px 10px 0px;
     display: block;
}


/** end three_box section **/


/** about section **/

.about {
     background: #fff;
     padding: 90px 0 0px 0;
}

.about .about_box {
     padding: 166px 153px 30px 153px;
}

.about .titlepage h2 {
     max-width: 436px;
}

.about .about_img {
     background: url(../images/about.png);
     background-size: 100% 100%;
     text-align: center;
     min-height: 700px;
}

.about .about_box h3 {
     color: #000;
     font-size: 27px;
     line-height: 30px;
     font-weight: 500;
}

.about .about_box p {
     color: #030303;
     font-size: 17px;
     line-height: 28px;
     font-weight: 500;
     margin-bottom: 30px;
}

.about .about_box .read_more:hover {
     color: #fff;
}


/** end about section **/


/** wedo  section **/

.wedo {
     padding-top: 70px;
}

.wedo .titlepage p {
     color: #141629;
     display: block;
     font-size: 17px;
     font-weight: bold;
     text-align: center;
     padding-top: 20px;
}

.work figure {
     margin: 0;
}

.work figure img {
     width: 100%;
}

.work_text {
     position: absolute;
     z-index: 9999;
     left: 0;
     right: 0;
     top: 0;
     bottom: 0;
     margin: 0 auto;
     vertical-align: middle;
     text-align: center;
     display: flex;
     align-items: center;
     justify-content: center;
     opacity: 0;
     transition: ease-in all 0.5s;
     cursor: pointer;
}

.margin_bottom {
     margin-bottom: 30px;
}

.work_text:hover {
     opacity: 1;
     transition: ease-in all 0.5s;
}

.work_text h3 {
     color: #fff;
     font-size: 25px;
     line-height: 28px;
     font-weight: 700;
     padding-bottom: 10px;
     text-transform: uppercase;
}

.blu {
     color: #51fe44;
     font-size: 17px;
     line-height: 28px;
     font-weight: 600;
     text-transform: uppercase;
}

.wedo .read_more {
     margin: 0 auto;
     display: block;
     margin-top: 60px;
}


/** end wedo  section **/


/** testimonial section **/

.testimonial {
     padding: 90px 0px 140px 0px;
     background: #fff;
}

.testimonial .titlepage p {
     color: #141629;
     line-height: 28px;
     font-weight: 500;
     font-size: 17px;
     padding-top: 20px;
}

.testimonial_Carousel .carousel-caption {
     position: inherit;
     padding: 0;
}

.testimonial_box {
     text-align: center;
}

.test_box {
     padding: 40px 25px;
     background: #141629;
}

.testimonial_Carousel .test_box h4 {
     font-size: 18px;
     color: #fff;
     line-height: 18px;
     display: block;
     text-align: center;
     text-transform: uppercase;
     font-weight: 600;
     padding: 23px 0px 0px 0px;
     text-align: left;
}

.testimonial_Carousel .test_box span {
     color: #0556c4;
     display: block;
     text-align: left;
     font-size: 17px;
}

.testimonial_Carousel .test_box i {
     font-size: 17px;
     line-height: 28px;
     text-align: left;
     float: left;
     margin-bottom: -12px;
     padding-right: 20px;
}

.testimonial_Carousel .test_box p {
     font-size: 17px;
     line-height: 28px;
     color: #fff;
     text-align: left;
     margin-top: 45px;
}

.testimonial_Carousel .carousel-indicators {
     bottom: -50px;
}

.testimonial_Carousel .carousel-indicators li {
     width: 18px;
     height: 18px;
     border-radius: 20px;
     background: #0556c4;
}

.testimonial_Carousel .carousel-indicators li.active {
     background: #51fe44;
}

#myCarousel .carousel-control-next-icon,
#myCarousel .carousel-control-prev-icon {
     display: none;
}


/** end testimonial section **/


/** footer **/

.footer {
     background: #141629;
     padding-top: 85px;
     text-align: center;
}

.footer .titlepage {
     text-align: left;
     padding-bottom: 0px;
}

.footer .titlepage h2 {
     color: #fff;
     margin: inherit;
     border-bottom: #fff solid 1px;
}

ul.location_icon {
     padding-top: 12px;
}

ul.location_icon li {
     display: inline-block;
     font-size: 18px;
     line-height: 20px;
     color: #fff;
     padding-left: 62px;
}

ul.location_icon li a {
     font-size: 30px;
     color: #fff;
     line-height: 30px;
     padding-right: 15px;
}

ul.location_icon li a:hover {
     color: #00ff00;
}

.main_form {
     padding: 50px 0px 0px 0px;
}

.main_form .contactus {
     border: inherit;
     padding: 0px 15px;
     margin-bottom: 20px;
     width: 100%;
     height: 60px;
     background: transparent;
     color: #777977;
     font-size: 18px;
     font-weight: normal;
     border-bottom: #ddd solid 1px;
}

.main_form .textarea {
     border: inherit;
     padding: 0px 15px;
     margin-bottom: 20px;
     width: 100%;
     background: transparent;
     color: #777977;
     font-size: 18px;
     font-weight: normal;
     border-bottom: #ddd solid 1px;
     padding-top: 30px;
}

.main_form .send_btn {
     font-size: 17px;
     transition: ease-in all 0.5s;
     background-color: #fff;
     text-transform: uppercase;
     color: #000;
     padding: 10px 0px;
     max-width: 160px;
     width: 100%;
     display: block;
     margin-top: 30px;
}

.main_form .send_btn:hover {
     background-color: #00ff00;
     transition: ease-in all 0.5s;
     color: #fff;
}

#request *::placeholder {
     color: #777977;
     opacity: 1;
}

ul.social_icon {
     padding-top: 37px;
}

ul.social_icon li {
     display: inline-block;
}

ul.social_icon li a {
     background: #fff;
     width: 40px;
     height: 40px;
     display: flex;
     align-items: center;
     justify-content: center;
     font-size: 25px;
     border-radius: 30px;
     margin: 0 3px;
}

ul.social_icon li a:hover {
     background-color: #00ff00;
     color: #fff;
}

.map {
     padding-top: 60px;
}

.map figure {
     margin: 0;
}

.map figure img {
     width: 100%;
}

.bottom_form h3 {
     font-weight: 600;
     font-size: 20px;
     text-align: left;
     color: #fff;
     padding-bottom: 15px;
}

.bottom_form .enter {
     border: inherit;
     padding: 0px 19px;
     width: 62%;
     height: 53px;
     background: #fff;
     color: #000;
     font-size: 18px;
     font-weight: 600;
     float: left;
}

.sub_btn {
     font-size: 17px;
     transition: ease-in all 0.5s;
     background-color: #00ff00;
     color: #fff;
     padding: 11px 0px;
     max-width: 200px;
     width: 100%;
     display: block;
     font-weight: 500;
     text-transform: uppercase;
     margin-left: -2px;
}

.sub_btn:hover {
     background-color: #000;
     transition: ease-in all 0.5s;
     color: #fff;
}

.copyright {
     margin-top: 70px;
     padding: 20px 0px;
}

.copyright p {
     color: #fff;
     font-size: 18px;
     line-height: 22px;
     text-align: center;
     border-top: #ddd solid 1px;
     padding-top: 25px;
}

.copyright a {
     color: #fff;
}

.copyright a:hover {
     color: #00ff00;
}


/** end footer **/
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>-->
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.html"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Client.html">Client</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Personnels.html">Personnels</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Commandes.html">Commandes</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Produits.html">Produits</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-user-circle padd_right" aria-hidden="true"></i>Login/Register</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      
      <!-- testimonial -->
      <div class="testimonial">

         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Commandes</h2>
                     <p>Just feel save while asking for a service </p>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
      </div>
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="titlepage">
                        <h2>Passage De Commande</h2>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Charguia</li>
                        <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> +71 9087654321</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>Fastsaver@gmail.com</li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                  <form action="" method="POST" id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="idCommande" type="int"required name="idCommande" id="idCommande"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="dateCommande" type="date"required name="dateCommande" id="dateCommande"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="etat" type="text" required name="etat" id="etat">                          
                           </div>
                           <div class="col-md-12">
                              <!--<input class="contactus" placeholder="Veuillez entrer votre type de panne"id="etat">-->
<select id="etat">
    <option value="">--Veuillez choisir une option--</option>
    <option value="P1">L'allumage et électricité moteur (batterie, alternateur)</option>
    <option value="P2">Les pièces annexes (démarreur, débitmètre, etc.)</option>
    <option value="P3">Les plaquettes de frein ou garnissage</option>
    <option value="P4">Le chauffage et la climatisation</option>
    <option value="P5">L'électronique du moteur</option>
    <option value="P6">Manque d'essence</option>
</select>
</div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="nb_produits" type="int"required name="nb_produits" id="nb_produits">                          
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="id_facture" type="int" required name="id_facture" id="id_facture">                          
                           </div>
                          
                        
                           <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <button class="send_btn" type="submit">Send <a href="C:\sou\htdocs\index.php"></a></button>
                           </div>
                           <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <ul class="social_icon">
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div class="map">
                        <figure><img src="images/map.jpg" alt="#"/></figure>
                     </div>
                     
                  </div>
               </div>
            </div>
           <!-- <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html> 
