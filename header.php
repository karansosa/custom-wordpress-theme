<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/demo.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

    <?php wp_head(); ?>
</head>
<body>

    <header class="header-wrapper" id="top">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                
                </div>
                <div class="col-lg-5 col-md-12 text-right header-right-top p-2">
                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>onlinestore.info@gmail.com</a>
                 
                </div>
                <div class="col-lg-3 col-md-12 text-right header-right-top p-2">
                  <a href="#"><i class="fa fa-mobile" aria-hidden="true"></i>+91 9865345892</a>
                </div>
                </div>
            </div>
        </div>

       <div class="container">
           <nav class="navbar navbar-expand-xl navbar-light">
            <a class="navbar-brand logo" href="#">Online Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse menu-wraper" id="navbarsExample06">

    <?php 

          if ( ! is_page( 'home' ) ) {
            $args = array(
              'theme_location' => 'primary',
              'container' => ''
            );

          }
						?>

						<?php wp_nav_menu(); ?>
   
  </div>
</nav>
       </div>
    </header>